<script setup>
import { onBeforeMount, reactive, ref, onMounted, watch } from 'vue';
import { RouterView, RouterLink, useRouter, useRoute } from 'vue-router';
import { useForm } from 'vee-validate';
// import { debounce } from 'lodash';
import { debounce } from 'lodash-es';
import moment from 'moment';
// import { object, string, number, date } from 'yup';
import * as yup from 'yup';
import axios from 'axios';
import { format, parse, parseISO, isValid } from 'date-fns'

import { useToast } from "vue-toastification";


const toast = useToast();

const router = useRouter();
const loading1 = ref(null);
const isLoadingDiv = ref(true);
const loadingButtonDelete = ref(false);
let dataIdBeingDeleted = ref(null);
const searchQuery = ref('');
const retriviedData = ref(null);
const currentPage = ref(1);
const rowsPerPage = ref(15);
const totalRecords = ref(0);
const displayConfirmation = ref(false);
const fleets = ref(null);
const isLoadingButton = ref(false);
const genderOptions = ref([
    { label: 'Masculino', value: 'male' },
    { label: 'Feminino', value: 'female' },
    { label: 'Outro', value: 'other' }
]);

const schema = yup.object({
    name: yup.string().required().trim().label("Name"),
    // plate_number: yup.string().required().trim().label("Email"),
    // model: yup.string().required().trim().label("Duration"),
    // equipment_fleet_id: yup.string().required().trim().label("Duration"),

});
const { defineField, handleSubmit, resetForm, errors, setErrors } = useForm({
    validationSchema: schema,
});
const [name] = defineField("name");
// const [plate_number] = defineField("plate_number");
// const [model] = defineField("model");
// const [equipment_fleet_id] = defineField("equipment_fleet_id");
const [_method] = defineField('_method');
const image = ref();


function formatToYYYYMMDD(date) {
  const parsedDate = typeof date === 'string' ? parseISO(date) : date
  return isValid(parsedDate) ? format(parsedDate, 'yyyy-MM-dd') : ''
}

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

function getSeverity(status) {
    switch (status) {
        case 'unqualified':
            return 'danger';

        case 'qualified':
            return 'success';

        case 'new':
            return 'info';

        case 'negotiation':
            return 'warn';

        case 'renewal':
            return null;
    }
}

const onSubmit = handleSubmit((values) => {
    // values.birthdate = formatToYYYYMMDD(values.birthdate);

    if (image.value != null) {
        values.image = image.value;
    }
    isLoadingButton.value = true;
    axios
        .post(`/api/equipmentfleet/${router.currentRoute.value.params.id}`, values,{
            headers: {
            'Content-Type': 'multipart/form-data'
          }
        })
        .then((response) => {
            // resetForm();
            router.back();
            toast.success("Successo");
        })
        .catch((error) => {
            isLoadingButton.value = false;
            toast.error(`${error.response.data.message}`);
            if (error.response.data.errors) {
                setErrors(error.response.data.errors);
            }
        })
        .finally(() => {
            isLoadingButton.value = false;
        });
});

const getData = async (page = 1) => {
    axios
        .get(`/api/equipmentfleet/${router.currentRoute.value.params.id}/edit`, {
            params: {
                query: searchQuery.value
            }
        })
        .then((response) => {
            retriviedData.value = response.data.equipment;
            name.value = retriviedData.value.name;
            _method.value = 'put';
            isLoadingDiv.value = false;
        })
        .catch((error) => {
            isLoadingDiv.value = false;
            toast.add({ severity: 'error', summary: `${error}`, detail: 'Message Detail', life: 3000 });
            goBackUsingBack();
        });
};

const deleteData = () => {
    loadingButtonDelete.value = true;

    axios
        .delete(`/api/equipmentfleet/${dataIdBeingDeleted.value}`)
        .then(() => {
            retriviedData.value.data = retriviedData.value.data.filter((data) => data.id !== dataIdBeingDeleted.value);
            closeConfirmation();
            toast.add({ severity: 'success', summary: `Sucesso`, detail: 'Sucesso ao apagar', life: 3000 });
        })
        .catch((error) => {
            toast.add({ severity: 'error', summary: `Erro`, detail: `${error}`, life: 3000 });
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

watch(searchQuery,debouncedSearch);

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
        </div>
    </div>

    <div v-else>
        <!-- content -->
          <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Criar Frotas</h2>
                </div>
                
              </div>
              <form>
                <hr class="my-4">
                <h5 class="mb-2 mt-4">Dados</h5>
                <p class="mb-4">Espaço para lançar Frotas</p>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">Equipamento</label>
                    <input type="text" id="firstname" v-model="name" class="form-control">
                  </div>
                 
                </div>
                
                <div class="form-row">
                  
                  <div class="col-md-6">
                    <button type="button" @click="onSubmit"
                        :disabled="isLoadingButton" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </form>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div>
</template>
