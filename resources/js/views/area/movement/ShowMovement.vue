<script setup>
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import { useRouter, useRoute } from "vue-router";
import moment from "moment";
import { useToast } from "vue-toastification";

// Configurar moment para português
moment.locale('pt');

const toast = useToast();
const router = useRouter();
const route = useRoute();
const isLoading = ref(true);
const movement = ref(null);
const movementId = route.params.id;

// Estados do movimento
const statusLabels = {
    1: "Aguarda Aprovação",
    2: "Aguardando Entrada", 
    3: "Na Oficina",
    4: "Em Manutenção",
    5: "Em Inspeção", 
    6: "Concluída",
    7: "Aguarda Saída",
    8: "Finalizada"
};

const statusColors = {
    1: "warning",
    2: "info", 
    3: "primary",
    4: "danger",
    5: "secondary", 
    6: "success",
    7: "dark",
    8: "light"
};

// Função para calcular duração entre duas datas
const calculateDuration = (startDate, endDate = null) => {
    if (!startDate) return null;
    
    const start = moment(startDate);
    const end = endDate ? moment(endDate) : moment();
    const duration = moment.duration(end.diff(start));
    
    const days = Math.floor(duration.asDays());
    const hours = Math.floor(duration.asHours() % 24);
    const minutes = Math.floor(duration.asMinutes() % 60);
    
    if (days > 0) {
        return `${days}d ${hours}h ${minutes}m`;
    } else if (hours > 0) {
        return `${hours}h ${minutes}m`;
    } else {
        return `${minutes}m`;
    }
};

// Timeline do movimento calculada
const timeline = computed(() => {
    if (!movement.value) return [];
    
    const m = movement.value;
    const events = [];
    
    // 1. Entrada solicitada
    if (m.entry_time) {
        events.push({
            status: 1,
            title: "Entrada Solicitada",
            timestamp: m.entry_time,
            user: m.requested_by_user_id ? `Usuário ${m.requested_by_user_id}` : "Sistema",
            duration: calculateDuration(m.entry_time, m.approved_at)
        });
    }
    
    // 2. Aprovada
    if (m.approved_at) {
        events.push({
            status: 2,
            title: "Entrada Aprovada",
            timestamp: m.approved_at,
            user: m.approved_by_user_id ? `Usuário ${m.approved_by_user_id}` : "Sistema",
            duration: calculateDuration(m.approved_at, m.in_maintenance_at)
        });
    }
    
    // 3. Em Manutenção
    if (m.in_maintenance_at) {
        events.push({
            status: 3,
            title: "Iniciou Manutenção",
            timestamp: m.in_maintenance_at,
            user: m.in_maintenance_by_user_id ? `Usuário ${m.in_maintenance_by_user_id}` : "Sistema",
            duration: calculateDuration(m.in_maintenance_at, m.maintenance_done_at)
        });
    }
    
    // 4. Manutenção Concluída
    if (m.maintenance_done_at) {
        events.push({
            status: 4,
            title: "Manutenção Concluída",
            timestamp: m.maintenance_done_at,
            user: m.maintenance_done_by_user_id ? `Usuário ${m.maintenance_done_by_user_id}` : "Sistema",
            duration: calculateDuration(m.maintenance_done_at, m.inspection_at)
        });
    }
    
    // 5. Em Inspeção
    if (m.inspection_at) {
        events.push({
            status: 5,
            title: "Em Inspeção",
            timestamp: m.inspection_at,
            user: m.inspection_done_by_user_id ? `Usuário ${m.inspection_done_by_user_id}` : "Sistema",
            duration: calculateDuration(m.inspection_at, m.authorized_exit_at)
        });
    }
    
    // 6. Saída Autorizada
    if (m.authorized_exit_at) {
        events.push({
            status: 6,
            title: "Saída Autorizada",
            timestamp: m.authorized_exit_at,
            user: m.authorized_exit_by_user_id ? `Usuário ${m.authorized_exit_by_user_id}` : "Sistema",
            duration: calculateDuration(m.authorized_exit_at, m.exit_time)
        });
    }
    
    // 7. Saída Concluída
    if (m.exit_time) {
        events.push({
            status: 8,
            title: "Saída Concluída",
            timestamp: m.exit_time,
            user: m.exit_by_user_id ? `Usuário ${m.exit_by_user_id}` : "Sistema",
            duration: null
        });
    }
    
    return events;
});

// Tempo total no sistema
const totalTimeInSystem = computed(() => {
    if (!movement.value || !movement.value.entry_time) return null;
    
    const endTime = movement.value.exit_time || new Date();
    return calculateDuration(movement.value.entry_time, endTime);
});

// Buscar dados do movimento
const fetchMovement = async () => {
    try {
        const response = await axios.get(`/api/entrymovement/${movementId}`);
        movement.value = response.data;
        isLoading.value = false;
    } catch (error) {
        toast.error("Erro ao carregar dados do movimento");
        router.back();
    }
};

const goBack = () => {
    router.back();
};

onMounted(() => {
    fetchMovement();
});
</script>

<template>
    <!-- Loading -->
    <div v-if="isLoading" class="vh-100 d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Content -->
    <div v-else class="container-fluid py-4">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h3 mb-1">Detalhes do Movimento #{{ movement.id }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" @click="goBack">Movimentos</a></li>
                                <li class="breadcrumb-item active">Movimento #{{ movement.id }}</li>
                            </ol>
                        </nav>
                    </div>
                    <button class="btn btn-outline-secondary" @click="goBack">
                        <i class="fe fe-arrow-left me-2"></i>Voltar
                    </button>
                </div>
            </div>
        </div>

        <!-- Cards de Resumo -->
        <div class="row mb-4">
            <!-- Informações do Equipamento -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg bg-primary text-white rounded-circle me-3">
                                <i class="fe fe-truck"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Equipamento</h6>
                                <p class="mb-1"><strong>{{ movement.equipment?.name || 'N/A' }}</strong></p>
                                <small class="text-muted">Frota: {{ movement.equipment?.fleet?.name || 'N/A' }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Atual -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg bg-success text-white rounded-circle me-3">
                                <i class="fe fe-activity"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Status Atual</h6>
                                <span :class="`badge badge-${statusColors[movement.equipment_movement_status_id]} badge-lg`">
                                    {{ statusLabels[movement.equipment_movement_status_id] }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tempo Total -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg bg-warning text-white rounded-circle me-3">
                                <i class="fe fe-clock"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Tempo Total</h6>
                                <p class="mb-0 h5">{{ totalTimeInSystem || 'Calculando...' }}</p>
                                <small class="text-muted">No sistema</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline do Movimento -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom-0">
                        <h5 class="card-title mb-0">
                            <i class="fe fe-clock me-2"></i>Timeline do Movimento
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div 
                                v-for="(event, index) in timeline" 
                                :key="index"
                                class="timeline-item"
                                :class="{ 'timeline-item-last': index === timeline.length - 1 }"
                            >
                                <div class="timeline-marker">
                                    <div 
                                        :class="`timeline-marker-icon bg-${statusColors[event.status]} text-white`"
                                    >
                                        <i class="fe fe-check"></i>
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h6 class="mb-1">{{ event.title }}</h6>
                                                    <p class="text-muted mb-2">
                                                        <i class="fe fe-calendar me-1"></i>
                                                        {{ moment(event.timestamp).format('DD/MM/YYYY HH:mm') }}
                                                    </p>
                                                    <p class="text-muted mb-0">
                                                        <i class="fe fe-user me-1"></i>{{ event.user }}
                                                    </p>
                                                </div>
                                                <div class="text-end" v-if="event.duration">
                                                    <span class="badge badge-light">
                                                        <i class="fe fe-clock me-1"></i>{{ event.duration }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Observações -->
        <div class="row mt-4" v-if="movement.observation">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom-0">
                        <h5 class="card-title mb-0">
                            <i class="fe fe-message-square me-2"></i>Observações
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">{{ movement.observation }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informações Técnicas -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom-0">
                        <h5 class="card-title mb-0">
                            <i class="fe fe-info me-2"></i>Informações Técnicas
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="mb-1"><strong>ID do Movimento:</strong></p>
                                <p class="text-muted">{{ movement.id }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-1"><strong>Criado em:</strong></p>
                                <p class="text-muted">{{ moment(movement.created_at).format('DD/MM/YYYY HH:mm') }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-1"><strong>Última atualização:</strong></p>
                                <p class="text-muted">{{ moment(movement.updated_at).format('DD/MM/YYYY HH:mm') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    padding-bottom: 2rem;
}

.timeline-item:not(.timeline-item-last)::before {
    content: '';
    position: absolute;
    left: -19px;
    top: 40px;
    width: 2px;
    height: calc(100% - 20px);
    background-color: #e9ecef;
}

.timeline-marker {
    position: absolute;
    left: -30px;
    top: 10px;
}

.timeline-marker-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    border: 3px solid white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.timeline-content {
    margin-left: 10px;
}

.avatar {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar-lg {
    width: 56px;
    height: 56px;
}

.badge-lg {
    font-size: 0.875rem;
    padding: 0.5rem 0.75rem;
}

.card {
    transition: all 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-2px);
}
</style>
