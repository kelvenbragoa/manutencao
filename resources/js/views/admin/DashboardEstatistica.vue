<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);

const equipmentCount = ref(0);
const fleetCount = ref(0);
const userCount = ref(0);
const availableMachinesCount = ref(0);
const chartRef = ref(null);

const aguardaAprovacaoCount = ref(0);
const aguardandoEntradaCount = ref(0);
const naOficinaCount = ref(0);
const manutencaoCount = ref(0);
const manutencaoDoneCount = ref(0);
const outOficinaCount = ref(0);

const chartLabels = ref([]);
const chartData = ref([]);
let chartInstance = null;

async function fetchDashboardData() {
    try {
        const response = await axios.get("/api/statistics");
        const data = response.data;
        equipmentCount.value = data.equipments;
        fleetCount.value = data.fleets;
        userCount.value = data.user;

        aguardaAprovacaoCount.value = data.aguardaAprovacaoCount;
        aguardandoEntradaCount.value = data.aguardandoEntradaCount;
        naOficinaCount.value = data.naOficinaCount;
        manutencaoCount.value = data.manutencaoCount;
        manutencaoDoneCount.value = data.manutencaoDoneCount;
        outOficinaCount.value = data.outOficinaCount;

        availableMachinesCount.value = data.availableMachinesCount;
        // Consome barChartData do backend
        if (Array.isArray(data.barChartData)) {
            chartLabels.value = data.barChartData.map((item) => item.date);
            chartData.value = data.barChartData.map((item) => item.total);
        } else {
            chartLabels.value = [];
            chartData.value = [];
        }
        updateChart();
    } catch (error) {
        // fallback: valores zerados
        equipmentCount.value = 0;
        fleetCount.value = 0;
        userCount.value = 0;
        availableMachinesCount.value = 0;
        workshopData.value = Array(30).fill(0);
        updateChart();
    }
}

function updateChart() {
    if (!chartRef.value) return;
    const ctx = chartRef.value.getContext("2d");
    if (chartInstance) {
        chartInstance.data.labels = chartLabels.value;
        chartInstance.data.datasets[0].data = chartData.value;
        chartInstance.update();
        return;
    }
    chartInstance = new Chart(ctx, {
        type: "bar",
        data: {
            labels: chartLabels.value,
            datasets: [
                {
                    label: "Equipamentos na Oficina",
                    data: chartData.value,
                    backgroundColor: "#36a2eb",
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                title: {
                    display: true,
                    text: "Equipamentos na Oficina por Dia",
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: "Quantidade",
                    },
                },
                x: {
                    title: {
                        display: true,
                        text: "Data",
                    },
                },
            },
        },
    });
}

onMounted(() => {
    fetchDashboardData();
});
</script>

<template>
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Equipamentos</h5>
                        <p class="display-4">{{ equipmentCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Frotas</h5>
                        <p class="display-4">{{ fleetCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Usuários</h5>
                        <p class="display-4">{{ userCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Máquinas Disponíveis</h5>
                        <p class="display-4">-{{ availableMachinesCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Aguarda Aprovação</h5>
                        <p class="display-4">{{ aguardaAprovacaoCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Aguardando Entrada</h5>
                        <p class="display-4">{{ aguardandoEntradaCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Na Oficina</h5>
                        <p class="display-4">{{ naOficinaCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Em manutenção</h5>
                        <p class="display-4">{{ manutencaoCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Manutenção Concluída</h5>
                        <p class="display-4">{{ manutencaoDoneCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fora da Oficina</h5>
                        <p class="display-4">{{ outOficinaCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <canvas ref="chartRef" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
