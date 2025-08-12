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
        .get(`/api/user?page=${page}`, {
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
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Usuários</h2>
                </div>
                <div class="col-auto">
                  <router-link  class="btn btn-primary" to="/admin/user/create">
                    <span class="fe fe-filter fe-12 mr-2"></span>Criar
                  </router-link>
                 
                </div>
              </div>
              <!-- table -->
              <div class="card shadow">
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Nivel</th>
                        <!-- <th>Estado</th> -->
                        <th>Data</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="item in retriviedData.data">
                        <td>
                          <p class="mb-0 ">{{item.id}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{item.name}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{item.email}}</p>
                        </td>
                        <td>
                          <p class="mb-0 ">{{item.role.name}}</p>
                        </td>
                        <!-- <td>
                          <p class="mb-0 ">{{ item.status == 1 ? 'Ativo' : 'Inativo' }}</p>
                        </td> -->
                        
                        <td>
                          <p class="mb-0 ">{{ moment(item.created_at).format('DD-MM-YYYY H:mm') }}</p>
                        </td>
                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <router-link class="dropdown-item" :to="'/admin/user/' + item.id + '/edit'">Editar</router-link>
                            <a class="dropdown-item" href="#">Remover</a>
                            <a class="dropdown-item" href="#">{{ item.status == 1 ? 'Desativar' : 'Ativar' }}</a>
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
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div>
</template>
