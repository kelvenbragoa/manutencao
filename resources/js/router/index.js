import AppLayout from "@/layout_admin/AppLayout.vue";
import AppAreaLayout from "@/layout_area/AppAreaLayout.vue";
import AppOcorrenciaLayout from "@/layout_ocorrencia/AppOcorrenciaLayout.vue";
import AppSegurancaLayout from "@/layout_seguranca/AppSegurancaLayout.vue";
import AppSupervisorLayout from "@/layout_supervisor/AppSupervisorLayout.vue";

import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            name: "login",
            component: () => import("@/views/auth/Login.vue"),
        },
        {
            path: "/ocorrencia",
            component: AppOcorrenciaLayout,
            children: [
                {
                    path: "/ocorrencia/dashboard",
                    name: "ocorrencia.dashboard",
                    component: () => import("@/views/ocorrencia/Dashboard.vue"),
                },
                {
                    path: "/ocorrencia/equipments",
                    name: "ocorrencia.equipments",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipments/IndexEquipments.vue"),
                },
                {
                    path: "/ocorrencia/equipments/create",
                    name: "ocorrencia.equipments.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipments/CreateEquipments.vue"),
                },
                {
                    path: "/ocorrencia/equipments/:id",
                    name: "ocorrencia.equipments.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipments/ShowEquipments.vue"),
                },
                {
                    path: "/ocorrencia/equipments/:id/edit",
                    name: "ocorrencia.equipments.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipments/EditEquipments.vue"),
                },


                {
                    path: "/ocorrencia/equipmentfleet",
                    name: "ocorrencia.equipmentfleet",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipmentfleet/IndexEquipmentFleet.vue"),
                },
                {
                    path: "/ocorrencia/equipmentfleet/create",
                    name: "ocorrencia.equipmentfleet.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipmentfleet/CreateEquipmentFleet.vue"),
                },
                {
                    path: "/ocorrencia/equipmentfleet/:id",
                    name: "ocorrencia.equipmentfleet.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipmentfleet/ShowEquipmentFleet.vue"),
                },
                {
                    path: "/ocorrencia/equipmentfleet/:id/edit",
                    name: "ocorrencia.equipmentfleet.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/equipmentfleet/EditEquipmentFleet.vue"),
                },

                {
                    path: "/ocorrencia/user",
                    name: "ocorrencia.user",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/user/IndexUser.vue"),
                },
                {
                    path: "/ocorrencia/user/create",
                    name: "ocorrencia.user.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/user/CreateUser.vue"),
                },
                {
                    path: "/ocorrencia/user/:id",
                    name: "ocorrencia.user.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/user/ShowUser.vue"),
                },
                {
                    path: "/ocorrencia/user/:id/edit",
                    name: "ocorrencia.user.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/user/EditUser.vue"),
                },

                {
                    path: "/ocorrencia/movements",
                    name: "ocorrencia.movements",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/movement/IndexMovement.vue"),
                },
                {
                    path: "/ocorrencia/entrymovement",
                    name: "ocorrencia.entrymovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/entrymovement/IndexEntryMovement.vue"),
                },
                {
                    path: "/ocorrencia/entrymovement/create",
                    name: "ocorrencia.entrymovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/entrymovement/CreateEntryMovement.vue"),
                },
                {
                    path: "/ocorrencia/entrymovement/:id",
                    name: "ocorrencia.entrymovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/entrymovement/ShowEntryMovement.vue"),
                },
                {
                    path: "/ocorrencia/entrymovement/:id/edit",
                    name: "ocorrencia.entrymovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/entrymovement/EditEntryMovement.vue"),
                },


                {
                    path: "/ocorrencia/exitmovement",
                    name: "ocorrencia.exitmovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/exitmovement/IndexExitMovement.vue"),
                },
                {
                    path: "/ocorrencia/exitmovement/create",
                    name: "ocorrencia.exitmovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/exitmovement/CreateExitMovement.vue"),
                },
                {
                    path: "/ocorrencia/exitmovement/:id",
                    name: "ocorrencia.exitmovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/exitmovement/ShowExitMovement.vue"),
                },
                {
                    path: "/ocorrencia/exitmovement/:id/edit",
                    name: "ocorrencia.exitmovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/ocorrencia/exitmovement/EditExitMovement.vue"),
                },
            ]
        },
        {
            path: "/seguranca",
            component: AppSegurancaLayout,
            children: [
                {
                    path: "/seguranca/dashboard",
                    name: "seguranca.dashboard",
                    component: () => import("@/views/seguranca/Dashboard.vue"),
                },
                {
                    path: "/seguranca/equipments",
                    name: "seguranca.equipments",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipments/IndexEquipments.vue"),
                },
                {
                    path: "/seguranca/equipments/create",
                    name: "seguranca.equipments.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipments/CreateEquipments.vue"),
                },
                {
                    path: "/seguranca/equipments/:id",
                    name: "seguranca.equipments.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipments/ShowEquipments.vue"),
                },
                {
                    path: "/seguranca/equipments/:id/edit",
                    name: "seguranca.equipments.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipments/EditEquipments.vue"),
                },


                {
                    path: "/seguranca/equipmentfleet",
                    name: "seguranca.equipmentfleet",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipmentfleet/IndexEquipmentFleet.vue"),
                },
                {
                    path: "/seguranca/equipmentfleet/create",
                    name: "seguranca.equipmentfleet.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipmentfleet/CreateEquipmentFleet.vue"),
                },
                {
                    path: "/seguranca/equipmentfleet/:id",
                    name: "seguranca.equipmentfleet.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipmentfleet/ShowEquipmentFleet.vue"),
                },
                {
                    path: "/seguranca/equipmentfleet/:id/edit",
                    name: "seguranca.equipmentfleet.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/equipmentfleet/EditEquipmentFleet.vue"),
                },

                {
                    path: "/seguranca/user",
                    name: "seguranca.user",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/user/IndexUser.vue"),
                },
                {
                    path: "/seguranca/user/create",
                    name: "seguranca.user.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/user/CreateUser.vue"),
                },
                {
                    path: "/seguranca/user/:id",
                    name: "seguranca.user.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/user/ShowUser.vue"),
                },
                {
                    path: "/seguranca/user/:id/edit",
                    name: "seguranca.user.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/user/EditUser.vue"),
                },

                {
                    path: "/seguranca/movements",
                    name: "seguranca.movements",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/movement/IndexMovement.vue"),
                },
                {
                    path: "/seguranca/entrymovement",
                    name: "seguranca.entrymovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/entrymovement/IndexEntryMovement.vue"),
                },
                {
                    path: "/seguranca/entrymovement/create",
                    name: "seguranca.entrymovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/entrymovement/CreateEntryMovement.vue"),
                },
                {
                    path: "/seguranca/entrymovement/:id",
                    name: "seguranca.entrymovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/entrymovement/ShowEntryMovement.vue"),
                },
                {
                    path: "/seguranca/entrymovement/:id/edit",
                    name: "seguranca.entrymovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/entrymovement/EditEntryMovement.vue"),
                },


                {
                    path: "/seguranca/exitmovement",
                    name: "seguranca.exitmovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/exitmovement/IndexExitMovement.vue"),
                },
                {
                    path: "/seguranca/exitmovement/create",
                    name: "seguranca.exitmovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/exitmovement/CreateExitMovement.vue"),
                },
                {
                    path: "/seguranca/exitmovement/:id",
                    name: "seguranca.exitmovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/exitmovement/ShowExitMovement.vue"),
                },
                {
                    path: "/seguranca/exitmovement/:id/edit",
                    name: "seguranca.exitmovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/seguranca/exitmovement/EditExitMovement.vue"),
                },
            ]
        },
        {
            path: "/area",
            component: AppAreaLayout,
            children: [
                {
                    path: "/area/dashboard",
                    name: "area.dashboard",
                    component: () => import("@/views/area/Dashboard.vue"),
                },
                {
                    path: "/area/equipments",
                    name: "area.equipments",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipments/IndexEquipments.vue"),
                },
                {
                    path: "/area/equipments/create",
                    name: "area.equipments.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipments/CreateEquipments.vue"),
                },
                {
                    path: "/area/equipments/:id",
                    name: "area.equipments.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipments/ShowEquipments.vue"),
                },
                {
                    path: "/area/equipments/:id/edit",
                    name: "area.equipments.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipments/EditEquipments.vue"),
                },


                {
                    path: "/area/equipmentfleet",
                    name: "area.equipmentfleet",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipmentfleet/IndexEquipmentFleet.vue"),
                },
                {
                    path: "/area/equipmentfleet/create",
                    name: "area.equipmentfleet.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipmentfleet/CreateEquipmentFleet.vue"),
                },
                {
                    path: "/area/equipmentfleet/:id",
                    name: "area.equipmentfleet.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipmentfleet/ShowEquipmentFleet.vue"),
                },
                {
                    path: "/area/equipmentfleet/:id/edit",
                    name: "area.equipmentfleet.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/equipmentfleet/EditEquipmentFleet.vue"),
                },

                {
                    path: "/area/user",
                    name: "area.user",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/user/IndexUser.vue"),
                },
                {
                    path: "/area/user/create",
                    name: "area.user.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/user/CreateUser.vue"),
                },
                {
                    path: "/area/user/:id",
                    name: "area.user.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/user/ShowUser.vue"),
                },
                {
                    path: "/area/user/:id/edit",
                    name: "area.user.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/user/EditUser.vue"),
                },

                {
                    path: "/area/movements",
                    name: "area.movements",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/movement/IndexMovement.vue"),
                },
                {
                    path: "/area/entrymovement",
                    name: "area.entrymovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/entrymovement/IndexEntryMovement.vue"),
                },
                {
                    path: "/area/entrymovement/create",
                    name: "area.entrymovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/entrymovement/CreateEntryMovement.vue"),
                },
                {
                    path: "/area/entrymovement/:id",
                    name: "area.entrymovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/entrymovement/ShowEntryMovement.vue"),
                },
                {
                    path: "/area/entrymovement/:id/edit",
                    name: "area.entrymovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/entrymovement/EditEntryMovement.vue"),
                },


                {
                    path: "/area/exitmovement",
                    name: "area.exitmovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/exitmovement/IndexExitMovement.vue"),
                },
                {
                    path: "/area/exitmovement/create",
                    name: "area.exitmovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/exitmovement/CreateExitMovement.vue"),
                },
                {
                    path: "/area/exitmovement/:id",
                    name: "area.exitmovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/exitmovement/ShowExitMovement.vue"),
                },
                {
                    path: "/area/exitmovement/:id/edit",
                    name: "area.exitmovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/area/exitmovement/EditExitMovement.vue"),
                },
            ]
        },
        {
            path: "/supervisor",
            component: AppSupervisorLayout,
            children: [
                {
                    path: "/supervisor/dashboard",
                    name: "supervisor.dashboard",
                    component: () => import("@/views/supervisor/Dashboard.vue"),
                },
                {
                    path: "/supervisor/equipments",
                    name: "supervisor.equipments",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipments/IndexEquipments.vue"),
                },
                {
                    path: "/supervisor/equipments/create",
                    name: "supervisor.equipments.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipments/CreateEquipments.vue"),
                },
                {
                    path: "/supervisor/equipments/:id",
                    name: "supervisor.equipments.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipments/ShowEquipments.vue"),
                },
                {
                    path: "/supervisor/equipments/:id/edit",
                    name: "supervisor.equipments.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipments/EditEquipments.vue"),
                },


                {
                    path: "/supervisor/equipmentfleet",
                    name: "supervisor.equipmentfleet",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipmentfleet/IndexEquipmentFleet.vue"),
                },
                {
                    path: "/supervisor/equipmentfleet/create",
                    name: "supervisor.equipmentfleet.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipmentfleet/CreateEquipmentFleet.vue"),
                },
                {
                    path: "/supervisor/equipmentfleet/:id",
                    name: "supervisor.equipmentfleet.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipmentfleet/ShowEquipmentFleet.vue"),
                },
                {
                    path: "/supervisor/equipmentfleet/:id/edit",
                    name: "supervisor.equipmentfleet.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/equipmentfleet/EditEquipmentFleet.vue"),
                },

                {
                    path: "/supervisor/user",
                    name: "supervisor.user",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/user/IndexUser.vue"),
                },
                {
                    path: "/supervisor/user/create",
                    name: "supervisor.user.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/user/CreateUser.vue"),
                },
                {
                    path: "/supervisor/user/:id",
                    name: "supervisor.user.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/user/ShowUser.vue"),
                },
                {
                    path: "/supervisor/user/:id/edit",
                    name: "supervisor.user.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/user/EditUser.vue"),
                },

                {
                    path: "/supervisor/movements",
                    name: "supervisor.movements",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/movement/IndexMovement.vue"),
                },
                {
                    path: "/supervisor/entrymovement",
                    name: "supervisor.entrymovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/entrymovement/IndexEntryMovement.vue"),
                },
                {
                    path: "/supervisor/entrymovement/create",
                    name: "supervisor.entrymovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/entrymovement/CreateEntryMovement.vue"),
                },
                {
                    path: "/supervisor/entrymovement/:id",
                    name: "supervisor.entrymovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/entrymovement/ShowEntryMovement.vue"),
                },
                {
                    path: "/supervisor/entrymovement/:id/edit",
                    name: "supervisor.entrymovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/entrymovement/EditEntryMovement.vue"),
                },


                {
                    path: "/supervisor/exitmovement",
                    name: "supervisor.exitmovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/exitmovement/IndexExitMovement.vue"),
                },
                {
                    path: "/supervisor/exitmovement/create",
                    name: "supervisor.exitmovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/exitmovement/CreateExitMovement.vue"),
                },
                {
                    path: "/supervisor/exitmovement/:id",
                    name: "supervisor.exitmovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/exitmovement/ShowExitMovement.vue"),
                },
                {
                    path: "/supervisor/exitmovement/:id/edit",
                    name: "supervisor.exitmovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/supervisor/exitmovement/EditExitMovement.vue"),
                },
            ]
        },

        {
            path: "/admin",
            component: AppLayout,
            children: [
                {
                    path: "/admin/dashboard",
                    name: "admin.dashboard",
                    component: () => import("@/views/admin/Dashboard.vue"),
                },
                {
                    path: "/admin/dashboard/statistic",
                    name: "admin.dashboard.statistic",
                    component: () => import("@/views/admin/DashboardEstatistica.vue"),
                },
                {
                    path: "/admin/dashboard/available",
                    name: "admin.dashboard.available",
                    component: () => import("@/views/admin/DashboardDisponibilidade.vue"),
                },

                {
                    path: "/admin/equipments",
                    name: "admin.equipments",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipments/IndexEquipments.vue"),
                },
                {
                    path: "/admin/equipments/create",
                    name: "admin.equipments.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipments/CreateEquipments.vue"),
                },
                {
                    path: "/admin/equipments/:id",
                    name: "admin.equipments.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipments/ShowEquipments.vue"),
                },
                {
                    path: "/admin/equipments/:id/edit",
                    name: "admin.equipments.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipments/EditEquipments.vue"),
                },


                {
                    path: "/admin/equipmentfleet",
                    name: "admin.equipmentfleet",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipmentfleet/IndexEquipmentFleet.vue"),
                },
                {
                    path: "/admin/equipmentfleet/create",
                    name: "admin.equipmentfleet.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipmentfleet/CreateEquipmentFleet.vue"),
                },
                {
                    path: "/admin/equipmentfleet/:id",
                    name: "admin.equipmentfleet.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipmentfleet/ShowEquipmentFleet.vue"),
                },
                {
                    path: "/admin/equipmentfleet/:id/edit",
                    name: "admin.equipmentfleet.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/equipmentfleet/EditEquipmentFleet.vue"),
                },

                {
                    path: "/admin/user",
                    name: "admin.user",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/user/IndexUser.vue"),
                },
                {
                    path: "/admin/user/create",
                    name: "admin.user.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/user/CreateUser.vue"),
                },
                {
                    path: "/admin/user/:id",
                    name: "admin.user.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/user/ShowUser.vue"),
                },
                {
                    path: "/admin/user/:id/edit",
                    name: "admin.user.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/user/EditUser.vue"),
                },

                {
                    path: "/admin/movements",
                    name: "admin.movements",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/movement/IndexMovement.vue"),
                },
                {
                    path: "/admin/entrymovement",
                    name: "admin.entrymovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/entrymovement/IndexEntryMovement.vue"),
                },
                {
                    path: "/admin/entrymovement/create",
                    name: "admin.entrymovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/entrymovement/CreateEntryMovement.vue"),
                },
                {
                    path: "/admin/entrymovement/:id",
                    name: "admin.entrymovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/entrymovement/ShowEntryMovement.vue"),
                },
                {
                    path: "/admin/entrymovement/:id/edit",
                    name: "admin.entrymovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/entrymovement/EditEntryMovement.vue"),
                },


                {
                    path: "/admin/exitmovement",
                    name: "admin.exitmovement",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/exitmovement/IndexExitMovement.vue"),
                },
                {
                    path: "/admin/exitmovement/create",
                    name: "admin.exitmovement.create",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/exitmovement/CreateExitMovement.vue"),
                },
                {
                    path: "/admin/exitmovement/:id",
                    name: "admin.exitmovement.show",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/exitmovement/ShowExitMovement.vue"),
                },
                {
                    path: "/admin/exitmovement/:id/edit",
                    name: "admin.exitmovement.edit",
                    meta: {
                        requiresAuth: true,
                    },
                    component: () =>
                        import("@/views/admin/exitmovement/EditExitMovement.vue"),
                },
            ],
        }
    ],
});

export default router;
