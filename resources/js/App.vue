 
<template>
    <v-app>
         <Toolbar />
        <router-view></router-view>
         <Footer />
    </v-app>
</template>
<script>
export default {
    name:'app',
    data() {
        return {

        }
    },
    computed: {
    },
    components:{
    },
    methods: {
    },
    created(){
    }
}
</script>