<script setup>
import AppHeader from "./AppHeader.vue";
import AppFooter from "./AppFooter.vue";
</script>

<template>
    <div class="wrapper">
        <app-header></app-header>
        <main role="main" class="main-content">
            <router-view></router-view>
        </main>
        <!-- <app-footer></app-footer> -->
    </div>
</template>
