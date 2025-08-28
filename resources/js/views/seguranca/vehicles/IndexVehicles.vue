<script setup>
import axios from "axios";
import { onBeforeMount, reactive, ref, onMounted, watch } from "vue";
import { RouterView, RouterLink, useRouter, useRoute } from "vue-router";

// import { debounce } from 'lodash';
import { debounce } from "lodash-es";

import moment from "moment";
import { useToast } from "vue-toastification";

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
        .get(`/api/vehicles?page=${page}`, {
            params: {
                query: searchQuery.value,
            },
        })
        .then((response) => {
            retriviedData.value = response.data;
            totalRecords.value = response.data.total;
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
        .delete(`/api/vehicles/${dataIdBeingDeleted.value}`)
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
});
</script>

<template>
    <div v-if="isLoadingDiv" class="vh-100 d-flex justify-content-center align-items-center">
        <div
            class="spinner-border text-primary"
            role="status"
            style="width: 3rem; height: 3rem"
        >
            <!--  -->
        </div>
    </div>

    <div v-else>
        <!-- content -->
                         <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">PESQUISAR VIATURA</h2>
              <p class="lead text-muted"> Pesquise a viatura clicando no Botão a baixo </p>
              <div class="row">
                
                
                
             
                <div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">Pesquisar por viatura</h5>
                    
                      <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target=".modal-full">Viatura</button>
                      <!-- Slide Modal -->
                     
                      <!-- Fullscreen modal -->
                      <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <button aria-label="" type="button" class="close px-2" data-dismiss="modal" aria-hidden="true">
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <p>Digite a matrícula da viatura.</p>
                              <form class="form-inline justify-content-center" @submit.prevent>
                                <input
                                  v-model="searchQuery"
                                  class="form-control form-control-lg mr-sm-2 bg-transparent"
                                  type="search"
                                  placeholder="Pesquisar matrícula"
                                  aria-label="Search"
                                  autocomplete="off"
                                >
                                <button class="btn btn-primary btn-lg mb-2 my-2 my-sm-0" type="button" @click="getData(1)">Pesquisar</button>
                              </form>
                              <div v-if="retriviedData && retriviedData.data && searchQuery" class="mt-3">
                                <ul class="list-group">
                                  <li
                                    v-for="item in retriviedData.data"
                                    :key="item.id"
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                  >
                                    <span>
                                      <strong>{{ item.plate_number }}</strong> - {{ item.make }} - {{ item.owner }}
                                      <br>
                                      <span
                                        class="badge"
                                        :class="item.status == 1 ? 'badge-success' : 'badge-danger'"
                                      >
                                        {{ item.status == 1 ? 'Autorizado' : 'Não Autorizado' }}
                                      </span>
                                    </span>
                                    <img :src="`/storage/${item.image}`" alt="Foto da viatura" class="img-thumbnail" style="width: 120px; height: 100px; object-fit: cover;">
                                  </li>
                                  <li v-if="retriviedData.data.length === 0" class="list-group-item text-muted">Nenhum resultado encontrado.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
          <!-- <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Veículos</h2>
                </div>
                <div class="col-auto">
                  <router-link  class="btn btn-primary" to="/area/vehicles/create">
                    <span class="fe fe-filter fe-12 mr-2"></span>Criar
                  </router-link>
                 
                </div>
              </div>
               table 
              <div class="card shadow">
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Nome</th>
                        <th>Estado</th>
                        <th>Data</th>
                        <th>Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="item in retriviedData.data">
                        <td>
                          <p class="mb-0 ">{{item.plate_number}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{item.make}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{item.owner}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{ item.status == 1 ? 'Autorizado' : 'Não Autorizado' }}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{ moment(item.created_at).format('DD-MM-YYYY H:mm') }}</p>
                        </td>
                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <router-link class="dropdown-item" :to="'/area/vehicles/' + item.id + '/edit'">Editar</router-link>
                            <a class="dropdown-item" href="#">Remover</a>
                            <a class="dropdown-item" href="#">{{ item.status == 1 ? 'Desautorizar' : 'Autorizar' }}</a>
                          </div>
                        </td>
                      </tr>
                 
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <nav aria-label="Table Paging" class="my-3">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div> 
          </div>  -->
        
    </div>
</template>
