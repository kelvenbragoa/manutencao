<script setup>
import axios from 'axios';
import { ref, onBeforeMount } from 'vue';
import router from '../../router';
import { useToast } from "vue-toastification";

const toast = useToast();
const email = ref('');
const password = ref('');
const checked = ref(false);
const submitted = ref(false);
const errorMessage = ref('');

const loginUser = () => {
    submitted.value = true;

    axios
        .post(`/api/login`, {
            email: email.value.toLowerCase(),
            password: password.value
        })
        .then((response) => {
            localStorage.setItem('token', response.data.access_token);
            localStorage.setItem('user', JSON.stringify(response.data.user));
            toast.success("Sucesso");
            // toast.add({ severity: 'success', summary: 'Successo', detail: 'Message Detail', life: 3000 });

            if (response.data.user.role_id == 1) {
                window.location.href = '/admin/dashboard';
            } else if (response.data.user.role_id == 2) {
                window.location.href = '/supervisor/dashboard';
            } else if (response.data.user.role_id == 3) {
                window.location.href = '/ocorrencia/dashboard';
            } else if (response.data.user.role_id == 4) {
                window.location.href = '/area/dashboard';
            } else if (response.data.user.role_id == 5) {
                window.location.href = '/seguranca/dashboard';
            }

        })
        .catch((error) => {
            errorMessage.value = error.response.data.message;
            // toast.add({ severity: 'error', summary: `${error.response.data.message}`, detail: 'Message Detail', life: 3000 });
            // toast("Default toast");
            // toast.info("Info toast");
            // toast.success("Success toast");
            toast.error(`${error.response.data.message}`);
            // toast.warning("Warning toast");
        })
        .finally(() => {
            submitted.value = false;
        });
    // })
};

onBeforeMount(() => {
    const token = localStorage.getItem('token');
    if (token) {
    }
});
</script>

<template>
     <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
          <div v-if="errorMessage">
                            <small>{{ errorMessage }}</small>
                        </div>
          <h1 class="h6 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" v-model="email"  id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" v-model="password"  id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          
          <button to="/admin/dashboard" class="btn btn-lg btn-primary btn-block" @click="loginUser" v-if="!submitted">Login</button>
          <button class="btn btn-lg btn-primary btn-block" type="button" disabled v-else>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Entrando...
        </button>
          <p class="mt-5 mb-3 text-muted">© 2025</p>
        </form>
      </div>
    </div>
</template>

