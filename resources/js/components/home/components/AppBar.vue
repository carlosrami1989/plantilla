<template>
   <div>
       
   <v-navigation-drawer app
    v-model="drawer"
    >
    <!-- -->   
      <v-list-item 
        v-model="selectedItem"
          color="teal lighten-3">
        <v-list-item-content   >
          <v-list-item-title class="text-h6"  >
            Control Clinico - Hosppitalario
          </v-list-item-title>
          <v-list-item-subtitle>
            Sisge-Ho
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list
        dense
        nav
      >
     <v-list-item-group>
        <v-list-item
             v-for="name in items"
                        :key="name.name"
                         
                        
                       
                        
        >
          <v-list-item-icon>
         
            <v-icon  :color="name.color"
            >{{ name.icon }}</v-icon>
           
          </v-list-item-icon>
 
          <v-list-item-content>
            <v-list-item-title>
             <router-link
                            :to=" prefijo +

                                    name.ruta
                            "
                             
                            >
                            {{ name.name }}
                             </router-link
                        ></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
      </v-list>
    
  </v-navigation-drawer>

  <v-app-bar app  >
    <!-- -->
      <v-app-bar-nav-icon
       @click.stop="drawer = !drawer"
       ></v-app-bar-nav-icon>

      <v-toolbar-title>Consultorio Dr. </v-toolbar-title>

      <v-spacer></v-spacer>
 <span>Carlos Ramirez V.</span>
       <v-btn icon>
        <v-icon>mdi-account</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-close-circle</v-icon>
      </v-btn>
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-main>

    <!-- Provides the application the proper gutter -->
    <v-container fluid>

      <!-- If using vue-router -->
      <router-view></router-view>
    </v-container>
  </v-main>

  <v-footer app>
    <!-- -->
     
  
  </v-footer>
   </div>
</template>

<script>
 import { prefix } from "../../../variables";
export default {
    name: "HomeAppBar",
    
     data: () => ({
        selectedItem: 1,
       icons: [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
      ],
      drawer: true,
      group: null,
      value: 1 ,
       prefijo: "",
      //drawer: null,
      text:"white--text lighten-1--text",
      bg:"secondary",
      base:"video",
      items: [
       {name:'Dashboard',icon: 'mdi-view-dashboard', ruta:'',color:'purple darken-1'},
        {name:'Ingreso de Pacientes',icon: 'mdi-human', ruta:'/modulos/administracion/paciente',color:'cyan darken-4'},
        {name:'Control Clinico',icon: 'mdi-clipboard-list', ruta:'',color:'green darken-4'},
        {name:'Reportes',icon: 'mdi-file-document', ruta:''},
        {name:'Visor de Pacientes',icon: 'mdi-chart-bar', ruta:'',color:'orange darken-4'},
         
      ],
    }),
    mounted() {
        this.prefijo = prefix;
      window.onscroll = () => {
      this.changeColor();

    };
    },
   
    methods: {
      pantalla(){
  if (screen.width < 1024) 
         
        this.drawer = true;
          
        else 
          if (screen.width < 1280) 
              this.drawer = true;
          else 
               this.drawer = false;
              //this.drawer = false
      },
      changeColor() {
      if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
      ) {
        this.bg = 'secondary';
       this.text="white--text lighten-1--text"
       this.base="transparent"

      } else {
        this.bg = 'secondary';
        this.text="white--text lighten-1--text"
         this.base="video"
      }
    },
    },
    watch: {
      group () {
       this.drawer = false
              },
    },
   
  }
</script>

 