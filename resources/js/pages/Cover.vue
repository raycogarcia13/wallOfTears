<template>
    <div>
        <!-- scroll side of categories -->
        <v-app-bar class="mt-5" dense color="rgba(255,255,255,0)" elevation="0">
            <v-sheet class="mx-auto" max-width="90vw">
                <v-slide-group show-arrows>
                    <v-slide-item v-for="(item,i) in categories" :key="i" v-slot="{ active, toggle }">
                        <v-btn
                        class="mx-2"
                        :input-value="active"
                        active-class="primary white--text"
                        depressed
                        rounded
                        @click="toggle"
                        v-text="item.name"
                        >
                        </v-btn>
                    </v-slide-item>
                </v-slide-group>
            </v-sheet>
        </v-app-bar>
        <!-- end categories -->

        <!-- tears area -->
        <v-row class="mt-5">
            <v-col cols="12" md="12" class="px-10">
                <v-row>
                    <v-col cols="12" md="4" v-for="(item,i) in items" :key="i">
                    <!-- <v-col cols="12" md="4"> -->
                        <v-card shaped >
                            <v-app-bar dense color="rgba(255,255,255,0)" elevation="0">
                                <v-card-title>Help me please</v-card-title>
                                <v-spacer class=""></v-spacer>
                                <v-chip class="mt-5 " color="primary" outlined>Categoria</v-chip>
                                <v-spacer class="d-none d-sm-flex"></v-spacer>
                                <v-avatar class="mt-5 d-none d-sm-flex">
                                    <v-img src="/images/test.jpg" ></v-img>
                                </v-avatar>
                            </v-app-bar>
                            <v-app-bar dense color="rgba(255,255,255,0)" elevation="0" class="mt-n7">
                                <v-card-subtitle>Elena de troya</v-card-subtitle>
                            </v-app-bar>
                            <v-divider class="mx-2"></v-divider>
                            <v-card-text class="text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem saepe officia quam perspiciatis asperiores harum atque assumenda, consequuntur, porro provident debitis quas quod iusto. Sit at sunt cumque eligendi!
                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <!-- end tears area -->
        <!-- paginator -->
        <v-app-bar dense color="rgba(255,255,255,0)" elevation="0" class="mt-5">
            <v-spacer></v-spacer>
            <v-pagination
                v-model="page"
                :length="4"
                circle
                ></v-pagination>
            <v-spacer></v-spacer>
        </v-app-bar>
        <!-- end paginator -->

        <!-- dialog new tears -->
        <v-dialog v-model="dialog" persistent max-width="800px">
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    fab
                    large
                    color="primary"
                    class="btn-add"
                    @click="dialog = true"
                >
                <v-icon>mdi-plus</v-icon>
            </v-btn>
            </template>
            <v-card>
                <v-card-title>
                <span class="headline">New Tear</span>
                </v-card-title>
                <v-card-text>
                <v-container>
                    <v-row>
                    <v-col cols="12" sm="6">
                            <v-text-field dense
                                label="Title *">
                            </v-text-field>
                            <v-text-field dense
                                label="Username *">
                            </v-text-field>
                            <v-text-field dense
                                label="Name">
                            </v-text-field>
                            <v-text-field dense
                                label="Email *">
                            </v-text-field>
                            <v-text-field dense
                                label="Phone">
                            </v-text-field>
                            <v-text-field dense
                                label="Address">
                            </v-text-field>
                               <v-file-input
                        small-chips
                        dense
                        label="Picture"
                        accept="image/png, image/jpeg, image/bmp"  
                        ></v-file-input>
                        <small class="text-red">*indicates required field</small>
                        <p><b>Note: </b>Only we show a fields username, title and a text of tear. Other fields are only for use contact and verify information </p>
                    </v-col>
                    <v-col cols="12" sm="6">
                            <v-autocomplete
                            :items="categories"
                            item-value="id"
                            item-text="name"
                            label="Category"
                            dense
                            ></v-autocomplete>
                        <v-textarea
                                shaped
                                label="Tear *"
                                rows="10"
                                no-resize
                        ></v-textarea>

                             <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    color="danger"
                    outlined
                    rounded
                    @click="dialog = false"
                >
                <v-icon>mdi-close</v-icon>
                    Close
                </v-btn>
                <v-btn
                    color="primary"
                    outlined
                    rounded
                    @click="dialog = false"
                >
                 <v-icon>mdi-check</v-icon>
                    Save
                </v-btn>
                </v-card-actions>
                    </v-col>
                    </v-row>
                </v-container>
                </v-card-text>
           
            </v-card>
        </v-dialog>
        <!-- end dialog new tears -->

        <!-- dialog open tear -->
        <!-- end dialog open  -->
    </div>
</template>

<script>
 export default {
     name:'cover',
     data() {
         return {
             page:1,
             dialog:false,
             categories:[],
             items:[
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
                 {
                     name:'testing 1',
                     text:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit illo minima, ut aut molestias tempore quod at libero numquam, molestiae facilis ea est quae et quaerat debitis laudantium esse.',
                     comments:[{
                         name:'paco',
                         text:'prueba un antidodto'
                     },{
                         name:'paco 2',
                         text:'prueba una venda'
                     }]
                 },
             ]
         }
     },
     methods: {
         getData(){
            axios.get('/api/category').then(res=>{
                this.categories = res.data;
             }).catch(err=>{
                 console.log(err.response);
             });
         }
     },
     mounted(){
         this.getData();
     },
 }

</script>

<style scoped>
.btn-add{
    position: fixed;
    bottom:10vh;
    right: 5vw;
    z-index: 99;
}

.btn-add:after{
  background-color: rgba(255, 255, 255, 0.5);
  content: "";
  opacity: 0.8;
  top: -5%;
  left: -5%;
  bottom: -5%;
  right: -3%;
  border-radius: 999999999px;
  position: absolute;
  z-index: -1;
}

.text-red{
    color: red;
}
</style>
