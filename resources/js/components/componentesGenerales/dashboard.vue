<template>
    
         <div>
         h 
       
                <v-navigation-drawer
                    absolute
                    left
                    class="blue lighten-5 px-3 py-3"
                    v-model="drawer"
                    :permanent="$vuetify.breakpoint.mdAndUp"
                >
                  
                    <v-list dense class="pt-0">
        <v-list-tile
         
        >
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
  
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
                </v-navigation-drawer>
      
       <v-toolbar color="white" absolute right>
                        <v-toolbar-side-icon
                            class="hidden-md-and-up"
                            @click.stop="drawer = !drawer"
                        ></v-toolbar-side-icon>
                    </v-toolbar>
                    <p
                        class="title grey--text text--lighten-1 font-weight-light text-xs-center py-5 my-5"
                    >Content</p>
       
         </div>
 
</template>
<script>
export default {
    data() {
        return {
            drawer: null,
        }
    },
}
</script>