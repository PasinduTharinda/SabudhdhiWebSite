<template>
    <v-app id="inspire">
      <v-main class="grey lighten-3">
        <v-container fluid class="pa-0">

          <navBar-component></navBar-component>



          <v-row class=" ">



          </v-row>


          <!-- <v-row class=" ">
                    <v-row class="mt-2">
                    <v-col cols="2" md="2">
                    </v-col>
                    <v-col cols="7" md="7" class="">
                        <v-card height="350px" width="100%" color="grey lighten-2">
                          <img src="/img/research1.jpeg"  height="340px" alt="" class="ml-2 mt-1">
                        </v-card>
                    </v-col>
                    <v-col cols="3" md="3" class="">
                          <v-card height="350px" width="100%" color="grey lighten-2">

                          </v-card>
                    </v-col>
                </v-row>
          </v-row> -->

          <!-- <v-row>
            <v-col cols="10" md="10">

              <v-card height="350px" width="100%" color="grey lighten-2" class="mt-2">
                <img src="/img/research1.jpeg"  height="340px" alt="" class="ml-15 mt-1">
                <button @click="download">Download</button>
              </v-card>


              <v-card height="350px" width="100%" color="grey lighten-2" class="mt-2">
                <img src="/img/research1.jpeg"  height="340px" alt="" class="ml-15 mt-1">

                <button @click="download">Download</button>
              </v-card>

            </v-col>

            <v-col cols="2" md="2">

              <v-card height="800px"  color="grey lighten-2">
              </v-card>

            </v-col>
        </v-row> -->











        </v-container>


      </v-main>
    </v-app>
  </template>

  <script>
  import axios from "axios";
  import jsPDF  from "jspdf";
  export default {
    components: {
      axios,
      jsPDF,
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
      console.log("Component mounted.");
      // this.getAllProduct();
    },

    methods: {

      // download pdf
      download(){
        const doc = new jsPDF();

        doc.text("Hello Pasindu!", 10, 10);
        doc.save("a4.pdf");
      },

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
