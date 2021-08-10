<template>
    <div>
        <v-row dense>
                <v-col
                cols="12"
                
                >
                 <v-card
                    
                >
            <v-card-title class="text-h5">
              Visitas de Pacientes

            </v-card-title>
            <br>
             
            <v-spacer></v-spacer>
                <v-sheet
                    class="v-sheet--offset mx-auto"
                    color="cyan"
                    elevation="12"
                    max-width="calc(100% - 32px)"
                    >
                    <v-sparkline
                        :labels="labels"
                        :value="value"
                        color="white"
                        line-width="2"
                        padding="16"
                    ></v-sparkline>
                    </v-sheet>

            
             
          </v-card>
        </v-col>
      </v-row>
    <v-row dense>
        <v-col
          cols="12"
          md="4"
        >
         <!-- la primera card -->
             
                    <v-card
                     color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >
                         
                       
                        <v-card-title class="indigo--text">
                      Pacientes atendidos Hoy 
                        </v-card-title>

                        <v-card-subtitle class="black--text">
                        Consultorio Dr. 
                        </v-card-subtitle>

                        <v-card-text class="black--text">
                         
                            <v-icon 
                           color="orange darken-1"
                            size="80px">
                            mdi-chart-bar-stacked
                            </v-icon>
                            150
                        </v-card-text>
                        <v-spacer></v-spacer>
                       
                    </v-card>
                
             
                    
 
 
         <!-- fin -->
        </v-col>

        <v-col
          cols="12"
          md="4"
        > <!-- la primera card -->
                            
             
                    <v-card
                     color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >
                         
                       
                        <v-card-title class="black--text">
                      Recetas Emitidas
                        </v-card-title>

                        <v-card-subtitle class="black--text">
                        Consultorio Dr. 
                        </v-card-subtitle>

                        <v-card-text class="black--text">
                         
                            <v-icon 
                           color="purple darken-1"
                            size="80px">
                             mdi-receipt
                            </v-icon>
                            2080
                        </v-card-text>
                        <v-spacer></v-spacer>
                       
                    </v-card>
 
 
         <!-- fin -->
        </v-col>

        <v-col
          cols="12"
          md="4"
        >
          <!-- la primera card -->
                            
             
                    <v-card
                    color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >
                         
                        <v-card-title class="black--text">
                     Total de Pacientes
                        </v-card-title>

                        <v-card-subtitle class="black--text">
                        Consultorio Dr.
                        </v-card-subtitle>
                    <v-card-text class="black--text">
                         
                            <v-icon 
                           color="red darken-2"
                            size="80px">
                              mdi-human
                            </v-icon>
                             3.780
                        </v-card-text>
                        <v-spacer></v-spacer>

                       
                    </v-card>
 
 
         <!-- fin -->
        </v-col>
      </v-row>


      <!-- aqui empieza otra fila -->
         <v-row dense>
        <v-col
          cols="12"
          md="4"
        >
         <!-- la primera card -->
                            
              
             <v-card
                      
                        color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >   
                        <v-card-title class="black--text" >
                       Próximos cumpleaños
                        </v-card-title>

                        
                      <v-card-text class="py-0">
                            <v-timeline
                                align-top
                                dense
                            >
                                <v-timeline-item
                                color="pink"
                                small
                                >
                                <v-row class="pt-1">
                                     <v-col cols="3">
                                   <v-icon 
                                    color="purple darken-1"
                                        >
                                        mdi-human-child
                                        </v-icon>
                                    </v-col>
                                    <v-col>
                                    <strong>Marzo 23 </strong>
                                    <div class="text-caption">
                                        Goyo Valentin
                                    </div>
                                    </v-col>
                                </v-row>
                                </v-timeline-item>
                                     <v-timeline-item
                                color="blue"
                                small
                                >
                                <v-row class="pt-1">
                                     <v-col cols="3">
                                   <v-icon 
                                    color="blue"
                                        >
                                        mdi-human-child
                                        </v-icon>
                                    </v-col>
                                    <v-col>
                                    <strong>Enero 25 </strong>
                                    <div class="text-caption">
                                        Cual Geronimo
                                    </div>
                                    </v-col>
                                </v-row>
                                </v-timeline-item>
                                

                            </v-timeline>
                            </v-card-text>

                        
                       

                       
                    </v-card>               
             
 
         <!-- fin -->
        </v-col>

 
         <!-- fin -->
        </v-col>

        <v-col
          cols="12"
          md="4"
        > <!-- la primera card -->
                            
             
                    <v-card
                     color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >
                         
                       
                        <v-card-title class="black--text">
                     Diagnostico mas frecuentes
                        </v-card-title>
 
                        <v-card-text>
                            Depleción de Volumen

                            <div  >
                                <v-rating
                                v-model="rating1"
                                color="yellow darken-3"
                                background-color="grey darken-1"
                                empty-icon="$ratingFull"
                                half-increments
                                hover
                                large
                                ></v-rating>
                            </div>
                             Fiebre de Origen Desconocido
                              <v-rating
                                v-model="rating2"
                                color="yellow darken-3"
                                background-color="grey darken-1"
                                empty-icon="$ratingFull"
                                half-increments
                                hover
                                large
                                ></v-rating>
                            </v-card-text>
                        <v-spacer></v-spacer>
                        
                    </v-card>
                   
 
         <!-- fin -->
        </v-col>

        <v-col
          cols="12"
          md="4"
        >
          <!-- la primera card -->
                            
             
                    <v-card
                    color="indigo lighten-5"
                        class="mx-auto"
                        max-width="344"
                    >
                         
                        <v-card-title class="black--text">
                     Pacientes por ciudades
                        </v-card-title>

                         
                        <v-card-text>
                        <v-list dense>
                             
                            <v-list-item-group
                               
                                color="transparent"
                            >
                             
                                <v-list-item
                                v-for="(item, i) in items"
                                :key="i"
                                >
                                <v-list-item-icon>
                                    <v-icon :color="item.color" v-text="item.icon"></v-icon>
                                </v-list-item-icon>
                                <v-list-item-content>
                                    <v-list-item-title v-text="item.text"></v-list-item-title>
                                </v-list-item-content>
                                </v-list-item>
                            </v-list-item-group>
                            </v-list>
                        </v-card-text>
                    </v-card>
 
 
         <!-- fin -->
        </v-col>
      </v-row>
      <!-- aqui termina :v -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            rating1:5,
            rating2:4.5,
          
                items: [
                    { text: 'Guayaquil', icon: 'mdi-city',color:'purple darken-3' },
                    { text: 'Duran', icon: 'mdi-home-city',color:'indigo darken-1' },
                    { text: 'Daule', icon: 'mdi-city-variant-outline',color:'green darken-2' },
                ],
            labels: [
        '12am',
        '3am',
        '6am',
        '9am',
        '12pm',
        '3pm',
        '6pm',
        '9pm',
      ],
      value: [
        200,
        675,
        410,
        390,
        310,
        460,
        250,
        240,
      ],
        }
    },
}
</script>

<style>
  .v-sheet--offset {
    top: -24px;
    position: relative;
  }
</style>