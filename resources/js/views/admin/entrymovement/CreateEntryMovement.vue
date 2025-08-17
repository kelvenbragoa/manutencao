<script setup>
import { onBeforeMount, reactive, ref, onMounted, watch } from "vue";
import { RouterView, RouterLink, useRouter, useRoute } from "vue-router";
import { useForm } from "vee-validate";
// import { debounce } from 'lodash';
import { debounce } from "lodash-es";
import moment from "moment";
// import { object, string, number, date } from 'yup';
import * as yup from "yup";
import axios from "axios";
import { format, parse, parseISO, isValid } from "date-fns";
import { useToast } from "vue-toastification";
import Multiselect from '@vueform/multiselect'
import '@vueform/multiselect/themes/default.css'

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
const equipments = ref(null);
const isLoadingButton = ref(false);
const genderOptions = ref([
    { label: "Masculino", value: "male" },
    { label: "Feminino", value: "female" },
    { label: "Outro", value: "other" },
]);
const image = ref();
const video = ref();
const imagePreview = ref(null);
const videoPreview = ref(null);

function formatToYYYYMMDD(date) {
    const parsedDate = typeof date === "string" ? parseISO(date) : date;
    return isValid(parsedDate) ? format(parsedDate, "yyyy-MM-dd") : "";
}

const schema = yup.object({
    observation: yup.string().required().trim().label("Email"),
    equipment_id: yup.string().required().trim().label("Duration"),

});
const { defineField, handleSubmit, resetForm, errors, setErrors } = useForm({
    validationSchema: schema,
});
const [observation] = defineField("observation");
const [equipment_id] = defineField("equipment_id");


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
        case "unqualified":
            return "danger";

        case "qualified":
            return "success";

        case "new":
            return "info";

        case "negotiation":
            return "warn";

        case "renewal":
            return null;
    }
}

const onFileUpload = (event) => {
    const file = event.files[0];
    image.value = event.files[0];
    console.log(image.value);

    if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = e.target.result;
        };
        reader.readAsDataURL(file);
    }
};

const onVideoUpload = (event) => {
    const file = event.files[0];
    video.value = event.files[0];
    console.log(video.value);
    if (file && file.type.startsWith("video/")) {
        videoPreview.value = URL.createObjectURL(file);
    }
};

const onSubmit = handleSubmit((values) => {
    if (image.value != null) {
        values.image = image.value;
    }

    if (video.value != null) {
        values.video = video.value;
    }

    values.birthdate = formatToYYYYMMDD(values.birthdate);

    isLoadingButton.value = true;
    axios
        .post(`/api/entrymovement`, values, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
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
        .get(`/api/entrymovement/create`, {
            params: {
                query: searchQuery.value,
            },
        })
        .then((response) => {
            retriviedData.value = response.data.equipments;
            equipments.value = response.data.equipments;

            isLoadingDiv.value = false;
        })
        .catch((error) => {
            isLoadingDiv.value = false;
            toast.add({
                severity: "error",
                summary: `${error}`,
                detail: "Message Detail",
                life: 3000,
            });
            goBackUsingBack();
        });
};

const deleteData = () => {
    loadingButtonDelete.value = true;

    axios
        .delete(`/api/equipments/${dataIdBeingDeleted.value}`)
        .then(() => {
            retriviedData.value.data = retriviedData.value.data.filter(
                (data) => data.id !== dataIdBeingDeleted.value,
            );
            closeConfirmation();
            toast.add({
                severity: "success",
                summary: `Sucesso`,
                detail: "Sucesso ao apagar",
                life: 3000,
            });
        })
        .catch((error) => {
            toast.add({
                severity: "error",
                summary: `Erro`,
                detail: `${error}`,
                life: 3000,
            });
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
            
        </div>
    </div>

    <div v-else>
        <!-- content -->
          <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Criar Entradas</h2>
                </div>
                
              </div>
              <form>
                <hr class="my-4">
                <h5 class="mb-2 mt-4">Dados</h5>
                <p class="mb-4">Espaço para lançar Entradas</p>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="equipment_id">Equipamentos</label>
                    <Multiselect
                        v-model="equipment_id"
                        :options="equipments"
                        value-prop="id"
                        label="name"
                        track-by="name"
                        placeholder="Selecione o equipamento"
                        :searchable="true"
                        :can-clear="true"
                    />
                    <!-- <select type="text" id="equipment_id" class="form-control" v-model="equipment_id">
                        <option v-for="equipment in equipments" :key="equipment.id" :value="equipment.id" >
                            {{ equipment.name }} - {{ equipment.plate_number }}
                        </option>
                    </select> -->
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="observation">Observação</label>
                    <textarea type="text" rows="10" id="observation" v-model="observation" class="form-control"></textarea>
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
