<template>

  <v-row>
    
  
    <v-fade-transition mode="out-in">
      <router-view />
    </v-fade-transition>
 </v-row>
</template>

<script>
  export default {
    name: 'BaseView',
    data() {
      return {
         drawer: true,
          group: null,
      }
    },
    watch: {
      group () {
        this.drawer = false
      },
    },
  }
</script>
