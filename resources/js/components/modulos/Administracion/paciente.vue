<template>
 <div>
     

            
             
                <v-toolbar
                 
                color="primary"
                dark
                >
                <v-toolbar-title>Ingreso de Paciente</v-toolbar-title>
                </v-toolbar>
                <v-tabs >
                <v-tab>
                    <v-icon >
                    mdi-account
                    </v-icon>
                    Informacion del paciente
                </v-tab>
                <v-tab>
                    <v-icon >
                    mdi-lock
                    </v-icon>
                    Informacion del Representante
                </v-tab>
                <v-tab>
                    <v-icon >
                    mdi-access-point
                    </v-icon>
                    Paciente Promedio
                </v-tab>

                <v-tab-item>
                    <v-card flat>
                    <v-card-text>
                    <paciente-informacion></paciente-informacion>
                    
                    </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                    <v-card-text>
                        <paciente-representante>
                        </paciente-representante>
                    </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                    <v-card-text>
                        <p>
                        Fusce a quam. Phasellus nec sem in justo pellentesque facilisis. Nam eget dui. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In dui magna, posuere eget, vestibulum et, tempor auctor, justo.
                        </p>

                        <p class="mb-0">
                        Cras sagittis. Phasellus nec sem in justo pellentesque facilisis. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nam at tortor in tellus interdum sagittis.
                        </p>
                    </v-card-text>
                    </v-card>
                </v-tab-item>
                </v-tabs>
           
            
            
      </div>  
 
</template>

<script>
 
  export default {
   
    data () {
      return {
        tab: null,
         
        
      }
    },
  }
</script>