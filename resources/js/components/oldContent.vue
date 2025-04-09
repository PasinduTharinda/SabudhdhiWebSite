<template>
    <v-app id="inspire">
      <v-main class="white">
        <v-container fluid class="pa-0">

          <navBar-component></navBar-component>



          <v-container>

          </v-container>




        </v-container>


      </v-main>
    </v-app>
  </template>

  <script>
  import axios from "axios";
  export default {
    components:{
      axios,
    },
    data() {
      return {
        items: [],

        // colors: [
        //     'indigo',
        //     'warning',
        //     'pink darken-2',
        //     'red lighten-1',
        //     'deep-purple accent-4',
        //   ],
        //   slides: [
        //     'First',
        //     'Second',
        //     'Third',
        //     'Fourth',
        //     'Fifth',
        //   ],
      };
    },

    created() {
      // this.getAllProduct();
    },

    mounted() {
      // console.log("Component mounted.");
      this.getAllProduct();
    },

    methods: {
    //   getAllProduct() {
    //     // alert('dada');

    //     let laravel = JSON.parse(window.Laravel);

    //     console.log(laravel);

    //     const header = {
    //       "X-CSRF-TOKEN": laravel.csrfToken,
    //       "X-Requested-With": "XMLHttpRequest",
    //       "content-type": "multipart/form-data",
    //     };

    //     axios
    //       .post("/api/getAllProduct", header)
    //       .then((response) => {
    //         if (response.data.http_status == "success") {
    //           console.log("ds", response);
    //           this.items = response.data.data;

    //           // this.sub_topic = this.items.sub_topic;
    //         } else {
    //         }
    //       })
    //       .catch((error) => {
    //         console.log("Error", error);
    //       });
    //   },
    },
  };
  </script>
