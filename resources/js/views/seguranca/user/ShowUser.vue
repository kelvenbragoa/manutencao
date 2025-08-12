<script setup>
import axios from "axios";
import { onBeforeMount, reactive, ref, onMounted, watch } from "vue";
import { RouterView, RouterLink, useRouter, useRoute } from "vue-router";

// import { debounce } from 'lodash';
import { debounce } from "lodash-es";

import moment from "moment";
import { useToast } from "vue-toastification";

const toast = useToast();
const router = useRouter();
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
            
        </div>
    </div>

    <div v-else>
        <!-- content -->
    </div>
</template>
