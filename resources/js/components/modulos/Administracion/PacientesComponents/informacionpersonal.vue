<template>
 
  <v-form v-model="valid">
    <v-container>
    <!-- aqui va la busqueda -->
        <v-row>
     
      
          <v-autocomplete
              v-model="model"
              :items="items"
              :loading="isLoading"
              :search-input.sync="search"
              chips
              clearable
              hide-details
              hide-selected
              item-text="apellido_paterno"
              item-value="id"
              label="Busqueda de Paciente ..."
               
            >
    
      <template v-slot:no-data>
        <v-list-item>
          <v-list-item-title>
            Busqueda de pacientes
            
          </v-list-item-title>
        </v-list-item>
      </template>
      <template v-slot:selection="{ attr, on, item, selected }">
        <v-chip
          v-bind="attr"
          :input-value="selected"
          color="blue-grey"
          class="white--text"
          v-on="on"
        >
          <v-icon left>
            mdi-bitcoin
          </v-icon>
        
             <span v-text="item.FULLNAME"></span>
        </v-chip>
      </template>
      <template v-slot:item="{ item }">
        <v-list-item-avatar
          
          class="text-h5 font-weight-light white--text"
        >
         <v-icon
           large
          color="blue darken-2"
         >mdi-human-child</v-icon>
        </v-list-item-avatar>
        <v-list-item-content>
          <v-list-item-title v-text=" item.FULLNAME"></v-list-item-title>
          <v-list-item-subtitle v-text="item.direccion"></v-list-item-subtitle>
        </v-list-item-content>
         
      </template>
    </v-autocomplete>
    <template v-slot:extension>
      <v-tabs
        v-model="tab"
        :hide-slider="!model"
        color="blue-grey"
        slider-color="blue-grey"
      >
        <v-tab :disabled="!model">
          News
        </v-tab>
        <v-tab :disabled="!model">
          Trading
        </v-tab>
        <v-tab :disabled="!model">
          Blog
        </v-tab>
      </v-tabs>
    </template>
   

        
        </v-row>
      <v-row>



      <!-- aqui va la cedula  -->
     
    
       <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.cedula"
            :rules="nameRules"
            label="Cedula"
            required
          ></v-text-field>
          
        </v-col>
           <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.hc"
            
             label="Historia Clinica"
            required
          ></v-text-field>
        </v-col>
        <!-- fin -->
       <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.primer_nombre"
            :rules="nameRules"
             :counter="10"
            label="Primer Nombre"
            required
          ></v-text-field>
        </v-col>
        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.segundo_nombre"
            :rules="nameRules"
            :counter="10"
            label="Segundo Nombre"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.apellido_paterno"
            :rules="nameRules"
            :counter="10"
            label="Apellido Paterno"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="paciente.apellido_materno"
            :rules="nameRules"
            :counter="10"
            label="Apellido Materno"
            required
          ></v-text-field>
        </v-col>

         <v-col
          cols="12"
          md="4"
        >
        <v-menu
            ref="menu1"
            v-model="menu1"
            :close-on-content-click="false"
            transition="scale-transition"
            offset-y
            max-width="290px"
            min-width="auto"
            >
            <template v-slot:activator="{ on, attrs }">
                <v-text-field
                v-model="dateFormatted"
                label="Fecha de nacimiento"
                hint="MM/DD/YYYY format"
                persistent-hint
                prepend-icon="mdi-calendar"
                v-bind="attrs"
                @blur="date = parseDate(dateFormatted)"
                v-on="on"
                ></v-text-field>
            </template>
            <v-date-picker
                v-model="date"
                no-title
                @input="menu1 = false"
            ></v-date-picker>
            </v-menu>
       
        </v-col>

         <v-col
          cols="12"
          md="4"
        >
         <v-select
          v-model="paciente.SelectGenero"
          
          :items="paciente.genero"
          item-text="descripcion"
          item-value="codigo"
          label="Select el Género"
          persistent-hint
          return-object
          single-line
        ></v-select>
      </v-col>
      
         <v-col
          cols="12"
          md="4"
        >
         <v-select
          v-model="paciente.SelectProvincia"
          
          :items="paciente.provincia"
          item-text="descripcion"
          item-value="codigo"
          label="Select el Provincia"
          persistent-hint
          return-object
          single-line
          @change="consultarCiudad()"
        ></v-select>
      </v-col>
         <v-col
          cols="12"
          md="4"
        >
         <v-select
          v-model="paciente.selectCiudad"
          
          :items="paciente.ciudad"
          item-text="descripcion"
          item-value="codigo"
          label="Select el Ciudad"
          persistent-hint
          return-object
          single-line
        ></v-select>
      </v-col>
      </v-row>
    </v-container>
  </v-form>
     
</template>

<script>
  export default {
   
    data: vm => ({
     
      
      date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
      dateFormatted: vm.formatDate((new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10)),
      menu1: false,
      menu2: false,
        items2:[],
         
      valid: false,
        isLoading: false,
      items: [],
      model: null,
      search: null,
      
      tab: null,
         picker: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
      paciente:{
          hc:0,
          cedula:"",
          primer_nombre:"",
          segundo_nombre:"",
          apellido_paterno:"",
          apellido_materno:"",
          fecha_nacimiento:"",
         genero: [],
         SelectGenero:"",
         provincia: [],
         SelectProvincia:"",
         ciudad: [],
         SelectCiudad:"",
          pais:"",
      },
      firstname: '',
      lastname: '',
      nameRules: [
        v => !!v || 'Campos es requerido',
        v => v.length <= 10 || 'El campo necesita más de 5 caracteres',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid',
      ],
    }),
    computed: {
      computedDateFormatted () {
        return this.formatDate(this.date)
      },
    },

    watch: {
      date (val) {
        this.dateFormatted = this.formatDate(this.date);
        this.paciente.fecha_nacimiento = this.dateFormatted;
      },
      /**aqui empieza el fecht */
         model (val) {
        if (val != null) this.tab = 0
        else this.tab = null
      },
      search (val) {
        // Items have already been loaded
        

        this.isLoading = true;

        // Lazily load input items
        fetch('/modulos/admision/paciente/cargar_paciente/'+ val)
          .then(res => res.clone().json())
          .then(res => {
            
            
            this.items = res.paciente
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => (this.isLoading = false))
      },
     

      /**fin */
    },
    mounted() {
      this.consultargenero();
       this.consultarprovincia();
    },

    methods: {
      formatDate (date) {
        if (!date) return null

        const [year, month, day] = date.split('-')
        return `${month}/${day}/${year}`
      },
      parseDate (date) {
        if (!date) return null

        const [month, day, year] = date.split('/')
        return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`
      },
      consultargenero(){
        let url = '/modulos/admision/paciente/cargar_genero';

         fetch(url)
          .then(res => res.clone().json())
          .then(res => {
            this.paciente.genero = res.genero;
            console.log(  res.genero);
            
            
            
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => (this.isLoading = false))

      },
      consultarprovincia(){
        let url = '/modulos/admision/paciente/cargar_provincia';

         fetch(url)
          .then(res => res.clone().json())
          .then(res => {
             this.paciente.provincia = res.provincia;
            
            
            
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => (this.isLoading = false))

      },
       consultarCiudad(){
        let url = '/modulos/admision/paciente/cargar_ciudad/' + this.paciente.SelectProvincia.codigo;

         fetch(url)
          .then(res => res.clone().json())
          .then(res => {
             this.paciente.ciudad = res.cuidad;
             console.log(  res.cuidad);
            
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => (this.isLoading = false))

      }

    },

  }
</script>