<script setup>
import { RouterView, RouterLink, useRouter, useRoute } from 'vue-router';

const router = useRouter();

const logout = () => {
    axios.post(`/api/logout`)
    .then((response) => {
        localStorage.removeItem('token'); // Remova o token armazenado
        localStorage.removeItem('user');  // Remova as informações do usuário
        router.replace('/'); // Redirecione para a página de login
    })
    .catch((error) => {
        console.error('Erro ao fazer logout:', error); // Lide com erros de logout
        localStorage.removeItem('token'); // Limpeza mesmo em caso de erro
        localStorage.removeItem('user');
        router.replace('/'); // Redirecione para a página de login
    });
};
</script>

<template>
       
      <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
        <div class="container-fluid">
          <router-link class="navbar-brand mx-lg-1 mr-0" to="/ocorrencia/dashboard">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </router-link>
          <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
            <i class="fe fe-menu navbar-toggler-icon"></i>
          </button>
          <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
            <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
              <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a href="#" id="dashboardDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="ml-lg-2">Dashboard</span><span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dashboardDropdown">
                  <router-link class="nav-link pl-lg-2" to="/ocorrencia/dashboard"><span class="ml-1">Dashboard</span></router-link>
                  <!-- <a class="nav-link pl-lg-2" href="./dashboard-analytics.html"><span class="ml-1">Analitico</span></a>
                  <a class="nav-link pl-lg-2" href="./dashboard-sales.html"><span class="ml-1">Entradas</span></a>
                  <a class="nav-link pl-lg-2" href="./dashboard-saas.html"><span class="ml-1">Saidas</span></a> -->
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="ml-lg-2">Assets</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
                  <router-link class="nav-link pl-lg-2" to="/ocorrencia/equipments"><span class="ml-1">Equipamento</span></router-link>
                  <router-link class="nav-link pl-lg-2" to="/ocorrencia/equipmentfleet"><span class="ml-1">Frotas</span></router-link>
                  <router-link class="nav-link pl-lg-2" to="/ocorrencia/user"><span class="ml-1">Usuários</span></router-link>
                  <router-link class="nav-link pl-lg-2" to="/ocorrencia/vehicles"><span class="ml-1">Veículos</span></router-link>

                  
                </div>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/ocorrencia/entrymovement">
                  <span class="ml-lg-2">Entrada</span>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/ocorrencia/exitmovement">
                  <span class="ml-lg-2">Saida</span>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/ocorrencia/movements">
                  <span class="ml-lg-2">Relatório</span>
                </router-link>
              </li>

            </ul>
          </div>
          <form class="form-inline ml-md-auto d-none d-lg-flex text-muted">
            <!-- <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search"> -->
          </form>
          <ul class="navbar-nav d-flex flex-row">
            <!-- <li class="nav-item">
              <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                <i class="fe fe-grid fe-16"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item nav-notif">
              <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <i class="fe fe-bell fe-16"></i>
                <span class="dot dot-md bg-success"></span>
              </a>
            </li> -->
            <li class="nav-item dropdown ml-lg-0">
              <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Definições
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="#">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="#">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" @click="logout()" href="#">Sair</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
</template>
