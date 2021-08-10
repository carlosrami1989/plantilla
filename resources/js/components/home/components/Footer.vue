<template>
 <v-footer
    dark 
    padless
      
  >
    <v-card
      flat
      tile
      class="secondary lighten-1 white--text text-center"
       width="100%"
    >
      <v-card-text>
        <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-4 white--text"
          icon
        >
          <v-icon size="24px">
           {{ icon }}
          </v-icon>
        </v-btn>
      </v-card-text>

      <v-card-text class="white--text pt-0"   > 
       Celestial Omega es una Radio Cristiana creada con el propósito de difundir la Palabra de Dios y de bendecir al cuerpo de Cristo(la iglesia de Dios) 
      </v-card-text>

      <v-divider></v-divider>

      <v-card-text class="white--text" >
        {{ new Date().getFullYear() }} — <strong>Derechos Reservados Codevesolut</strong>
      </v-card-text>
    </v-card>
  </v-footer>
</template>

<script>
  export default {
    name: 'HomeFooter',

    data: () => ({
          icons: [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-youtube',
        'mdi-instagram',
      ],

    }),
  }
</script>

<style lang="sass">
  #home-footer a
    text-decoration: none
</style>
