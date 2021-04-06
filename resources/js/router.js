 import Vue from 'vue'
 import Router from 'vue-router'
 Vue.use(Router)

 import Cover from './pages/Cover.vue'

 let routes = [{
         path: '/',
         name: 'cover',
         component: Cover,
         props: true
     },

     //  {
     //      path: '*',
     //      name: '404',
     //      component: Error,
     //  }
 ]

 export default new Router({
     base: '/',
     mode: 'history',
     routes,
     scrollBehavior(to, from, savedPosition) {
         return { x: 0, y: 0 }
     }
 })