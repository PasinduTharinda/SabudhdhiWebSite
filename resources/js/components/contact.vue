<template>
    <v-app id="inspire">
      <v-main class="white">
        <v-container fluid class="pa-0">

          <navBar-component></navBar-component>



          <v-container fluid class="mt-6" style="justify-content: center; width: 1200px;">
            <v-row >
              <v-col cols="12" md="12" sm="12" class="pa-0">

                <v-card height="550px" class="White  " elevation="0">
                  <v-row>
                  <v-col cols="8" md="8" class="ml-0">

                      <v-row class="pa-10" style="justify-content: center">
                          <v-col cols="12" md="12" style="font-size: 18px; margin-left: 10px; ">
                              <v-row justify="center">

                                  <p>තැපෑල ලිපිනය : සබුද්ධි පර්යේෂණ සහ අධ්‍යයන කවය,
                                      අංක 2E/3F/U03,
                                      ලේක් ක්‍රෙස්ට්, අංගොඩ, මණ්ඩවිල.</p>

                              </v-row>
                              <v-row>
                                  <p>දුරකථන අංකය :
                                      0112567070 / 0773557667
                                  </p>
                              </v-row>
                              <v-row>
                                  <p>ඊමේල් ලිපිනය :
                                      journal@sabuddhi.com
                                  </p>
                              </v-row>
                          </v-col>
                      </v-row>

                  </v-col>


<!--                  <v-col cols="4" md="4" class="ml-0">-->
<!--                    <v-card height="1000px" class="White " elevation="0">-->
<!--                      <v-tabs-->
<!--                          background-color="#004aae"-->
<!--                          slider-color="#002352"-->
<!--                          slider-size="5"-->
<!--                          color="white"-->
<!--                          tile-->
<!--                          block-->
<!--                          center-active-->
<!--                          small-->
<!--                          next-icon="mdi-arrow-right-bold-box-outline"-->
<!--                          prev-icon="mdi-arrow-left-bold-box-outline"-->
<!--                          v-model="tabInTableView"-->
<!--                        >-->
<!--                          <v-tabs-slider color="yellow"></v-tabs-slider>-->
<!--                          <v-tab-->
<!--                            class="v-tab"-->
<!--                            style="-->
<!--                              color: white !important;-->
<!--                              font-family: font-family: Cambria,Georgia,serif;-->
<!--                              font-size: 15px !important;-->
<!--                              text-transform: inherit !important;-->
<!--                            "-->
<!--                          >-->
<!--                            <v-icon left small style="color: white !important"-->
<!--                              >mdi-new-box</v-icon-->
<!--                            >නවතම ලිපි-->
<!--                          </v-tab>-->
<!--                          <v-tab-->
<!--                            class="v-tab"-->
<!--                            style="-->
<!--                              color: white !important;-->
<!--                              font-family: font-family: Cambria,Georgia,serif;-->
<!--                              font-size: 15px !important;-->
<!--                              text-transform: inherit !important;-->
<!--                            "-->
<!--                          >-->
<!--                            <v-icon left small style="color: white !important"-->
<!--                              >mdi-newspaper</v-icon-->
<!--                            >ජනප්‍රිය ලිපි-->
<!--                          </v-tab>-->
<!--                          <v-tab-item class="v-tab-item">-->
<!--&lt;!&ndash;                            <v-row>&ndash;&gt;-->
<!--&lt;!&ndash;                              <v-col cols="12" md="12" >&ndash;&gt;-->
<!--&lt;!&ndash;                                <hr>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-card height="auto" class="pa-1">&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                              </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                              </v-col>&ndash;&gt;-->
<!--&lt;!&ndash;                            </v-row>&ndash;&gt;-->
<!--                          </v-tab-item>-->

<!--                          <v-tab-item class="v-tab-item">-->
<!--&lt;!&ndash;                            <v-row>&ndash;&gt;-->
<!--&lt;!&ndash;                              <v-col cols="12" md="12" >&ndash;&gt;-->
<!--&lt;!&ndash;                                <hr>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-card height="auto" class="pa-1">&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                                <v-divider></v-divider>&ndash;&gt;-->
<!--&lt;!&ndash;                                <v-card height="150px" class="grey lighten-2" elevation="0">&ndash;&gt;-->

<!--&lt;!&ndash;                                </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                              </v-card>&ndash;&gt;-->

<!--&lt;!&ndash;                              </v-col>&ndash;&gt;-->
<!--&lt;!&ndash;                            </v-row>&ndash;&gt;-->
<!--                          </v-tab-item>-->

<!--                        </v-tabs>-->

<!--                    </v-card>-->
<!--                  </v-col>-->
                </v-row>
              </v-card>

              </v-col>
            </v-row>
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
