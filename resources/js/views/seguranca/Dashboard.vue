<script setup>
  import axios from "axios";
import { onBeforeMount, reactive, ref, onMounted, watch, onUnmounted } from "vue";
import { RouterView, RouterLink, useRouter, useRoute } from "vue-router";

import { debounce } from "lodash-es";

import moment from "moment";
import { useToast } from "vue-toastification";

let interval;

const router = useRouter();
const toast = useToast();
const loading1 = ref(null);
const isLoadingDiv = ref(true);
const loadingButtonDelete = ref(false);
let dataIdBeingDeleted = ref(null);
const searchQuery = ref("");
const retriviedData = ref(null);
const currentPage = ref(1);
const rowsPerPage = ref(15);
const totalRecords = ref(0);
const displayConfirmation = ref(false);
const menu = ref();

const authorizedin = ref([]);
const authorizedout = ref([]);

const toggle = (event, id) => {
    dataIdBeingDeleted.value = id;
    menu.value.toggle(event);
};

function goBackUsingBack() {
    if (router) {
        router.back();
    }
}

const closeConfirmation = () => {
    displayConfirmation.value = false;
};
const confirmDeletion = (id) => {
    displayConfirmation.value = true;
    dataIdBeingDeleted.value = id;
};

const getData = async (page = 1) => {
    axios
        .get(`/api/dashboard`, {
            params: {
                query: searchQuery.value,
            },
        })
        .then((response) => {
            authorizedout.value = response.data.out;
            authorizedin.value = response.data.in;
            isLoadingDiv.value = false;
            console.log(retriviedData.value)
        })
        .catch((error) => {
            isLoadingDiv.value = false;
            toast.error(`${error}`);
            goBackUsingBack();
        });
};

const deleteData = () => {
    loadingButtonDelete.value = true;

    axios
        .delete(`/api/user/${dataIdBeingDeleted.value}`)
        .then(() => {
            retriviedData.value.data = retriviedData.value.data.filter(
                (data) => data.id !== dataIdBeingDeleted.value
            );
            closeConfirmation();
            toast.success("Sucesso");
        })
        .catch((error) => {
            toast.error(`${error}`);
            loadingButtonDelete.value = false;
        })
        .finally(() => {
            loadingButtonDelete.value = false;
        });
};

const onPageChange = (event) => {
    currentPage.value = event.page + 1;
    rowsPerPage.value = event.rows;
    getData(currentPage.value);
};

const debouncedSearch = debounce(() => {
    getData(currentPage.value);
}, 300);

watch(searchQuery, debouncedSearch);

onMounted(() => {
    getData();
    interval = setInterval(() => {
    getData();
  }, 10000); 
});

onUnmounted(() => {
  clearInterval(interval); // Para o intervalo ao destruir o componente
});
</script>



<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Cornelder</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only"
                                    >Date Ranges</label
                                >
                                <div
                                    id="reportrange"
                                    class="px-2 py-2 text-muted"
                                >
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm">
                                    <span
                                        class="fe fe-refresh-ccw fe-16 text-muted"
                                    ></span>
                                </button>
                                <button type="button" class="btn btn-sm mr-2">
                                    <span
                                        class="fe fe-filter fe-16 text-muted"
                                    ></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <!-- Coluna Entrada -->
                    <div class="col-md-6">
                        <h4 class="mb-3" style="color: green">
                            Equipamentos Autorizadas - Entrada
                        </h4>
                        <div class="card shadow mb-3" v-for="item in authorizedin">
                            <div class="card-body">
                                <strong>Matrícula:</strong> {{item.plate_number}} <br />
                                <strong>Frota:</strong> {{item.equipment.fleet.name}} <br />
                                <strong>Equipamento:</strong> {{item.equipment.name}}
                            </div>
                        </div>
                    </div>

                    <!-- Coluna Saída -->
                    <div class="col-md-6">
                        <h4 class="mb-3" style="color: red">
                            Equipamentos Autorizadas - Saída
                        </h4>
                        <div class="card shadow mb-3" v-for="item in authorizedout">
                            <div class="card-body">
                                <strong>Matrícula:</strong> {{item.plate_number}} <br />
                                <strong>Frota:</strong> {{item.equipment.fleet.name}} <br />
                                <strong>Equipamento:</strong> {{item.equipment.name}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
    <div
        class="modal fade modal-notif modal-slide"
        tabindex="-1"
        role="dialog"
        aria-labelledby="defaultModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">
                        Notifications
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small
                                        ><strong
                                            >Package has uploaded
                                            successfull</strong
                                        ></small
                                    >
                                    <div class="my-0 text-muted small">
                                        Package is zipped and uploaded
                                    </div>
                                    <small
                                        class="badge badge-pill badge-light text-muted"
                                        >1m ago</small
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small
                                        ><strong
                                            >Widgets are updated
                                            successfull</strong
                                        ></small
                                    >
                                    <div class="my-0 text-muted small">
                                        Just create new layout Index, form,
                                        table
                                    </div>
                                    <small
                                        class="badge badge-pill badge-light text-muted"
                                        >2m ago</small
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small
                                        ><strong
                                            >Notifications have been
                                            sent</strong
                                        ></small
                                    >
                                    <div class="my-0 text-muted small">
                                        Fusce dapibus, tellus ac cursus commodo
                                    </div>
                                    <small
                                        class="badge badge-pill badge-light text-muted"
                                        >30m ago</small
                                    >
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small
                                        ><strong
                                            >Link was attached to menu</strong
                                        ></small
                                    >
                                    <div class="my-0 text-muted small">
                                        New layout has been attached to the menu
                                    </div>
                                    <small
                                        class="badge badge-pill badge-light text-muted"
                                        >1h ago</small
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- / .row -->
                    </div>
                    <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary btn-block"
                        data-dismiss="modal"
                    >
                        Clear All
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade modal-shortcut modal-slide"
        tabindex="-1"
        role="dialog"
        aria-labelledby="defaultModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">
                        Shortcuts
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-success justify-content-center"
                            >
                                <i
                                    class="fe fe-cpu fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-primary justify-content-center"
                            >
                                <i
                                    class="fe fe-activity fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-primary justify-content-center"
                            >
                                <i
                                    class="fe fe-droplet fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-primary justify-content-center"
                            >
                                <i
                                    class="fe fe-upload-cloud fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-primary justify-content-center"
                            >
                                <i
                                    class="fe fe-users fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div
                                class="squircle bg-primary justify-content-center"
                            >
                                <i
                                    class="fe fe-settings fe-32 align-self-center text-white"
                                ></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
