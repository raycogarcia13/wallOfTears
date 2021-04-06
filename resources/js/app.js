import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import router from './router';
import store from './store/store';
import App from './App.vue';
import vuetify from './plugins/vuetify'
import axios from './plugins/axios'
import components from './plugins/components'
// import access from './middlewares/access'

window.axios = axios
    // window.Echo = echo

Vue.use(Vuetify);
Vue.use(VueRouter);

// store.dispatch('init')

// router.beforeEach((to, from, next) => {

//     //rutas free
//     if (access.find(el => el === to.name)) {
//         next();
//     } else {
//         //esta autenticado
//         if (localStorage.getItem('world_user')) {
//             if (!store.state.login.user.person) {
//                 if (store.state.login.user.rol.rol == 'family' && to.name != 'family_verify')
//                     next('/family_verify')
//                 else if (store.state.login.user.rol.rol == 'student' && to.name != 'student_verify')
//                     next('/student_verify')
//             }
//             next();
//         } else
//             next('/login')
//     }
//     //la ruta es logout
//     if (to.name == 'logout') {
//         store.dispatch('login/logoutAction', null, { root: true })
//         next({ name: 'login' })
//     }

//     //para los permisos
//     // access[to.path]
//     // let rol = "none"
//     // if (localStorage.getItem('world_user'))
//     // rol = JSON.parse(localStorage.getItem('world_user'));
//     // console.log(to.name);
//     // console.log(rol);
//     next();
// })

new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#app');