<template>
    <div>
      
   
      <home-app-bar />

        <!-- <home-view /> -->

      
    
    </div>  
</template>

<script>
export default {
    name: "HomeLayout",
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
    components: {
      //HomeAppBar: () => import("./components/home/components/AppBar.vue"),

        // HomeView: () => import("./components/View"),

        // HomeFooter: () => import("./components/Footer"),

        /* ,
        HomeSettings: () => import("@/layouts/home/Settings"),
         */
    }
};
</script>
