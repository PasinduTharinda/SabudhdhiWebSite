<template>
    <v-app id="inspire">
      <v-main class="white">
        <v-container fluid class="pa-0">

          <navBar-component></navBar-component>



      <v-container fluid class="mt-6" style="justify-content: center; width: 1200px;">
        <v-row >
          <v-col cols="12" md="12" sm="12" class="pa-0">

            <v-card height="1080px" class="White  " elevation="0">
              <v-row>
              <v-col cols="8" md="8" class="ml-0">
                <center>
                  <v-card class="pa-5" height="1000px">
                  <v-row class="mt-1 ml-1">

                    <v-col cols="12" md="12" class="mt-10" style="font-size:18px; text-align: justify;">
                        <h2 style="font-family: Cambria,Georgia,serif;"><b>අප ගැන</b></h2>
                        <p>සබුද්ධි සඟරාව සමාජීය අධ්‍යයන සහ එහි උප මාතෘකා ආවරණය කරන අන්තර්ජාල, ජාත්‍යන්තර සඟරාවකි. වර්ෂයට කලාප දෙකක් වන සේ සබුද්ධි 
                          ජාත්‍යන්තර සඟරාව මාර්තු සහ සැප්තැම්බර් මාසවලදී ප්‍රකාශයට පත් කෙරේ. ක්‍රීඩා ශාස්ත්‍රය, භාෂාව සහ සාහිත්‍යය, සමාජ විද්‍යාව, දේශපාලන විද්‍යාව, මාධ්‍ය
                           හා සන්නිවේදන අධ්‍යයනය යන පස් වැදෑරුම් විෂයන් යටතේ සබුද්ධි ජාත්‍යන්තර සඟරාව ප්‍රකාශයට පත් කෙරේ. ප්‍රධාන භාෂා මාධ්‍යය සිංහල යි. අතිරේකව 
                           ඉංග්‍රීසි මාධ්‍යයෙන් ද සබුද්ධි ජාත්‍යන්තර සඟරාවේ ලිපි ප්‍රකාශයට පත් කෙරේ. සබුද්ධි සඟරාව සබුද්ධි ප්‍රකාශනයකි.</p>

                        <p>සබුද්ධි සඟරාවේ පළ කෙරෙන සියලුම පර්යේෂණ ලිපි සම්පූර්ණ විවෘත ප්‍රවේශය සහිතව පළ කෙරේ. නොමිලේ කියවීමට, බාගත කිරීමට අවසර හිමි වේ. 
                          මුල් කෘතිය නිසි ලෙස සඳහන් කර ඇත්නම් සබුද්ධි සඟරාවේ පළවන ඕනෑම පර්යේෂණ ලිපියක් ඕනෑම මාධ්‍යයක භාවිත කිරීමට සහ බෙදා හැරීමට අවසර ඇත.</p>

                        <p>සබුද්ධි සඟරාවේ ලිපි පළ කිරීමේදී සියලුම කර්තෘවරුන් සියලුම ආකාරයේ බුද්ධිමය අයිතීන් තහවුරු කළ යුතුය. සබුද්ධි සඟරාවේ පර්යේෂණ ලිපි පළ කිරීමෙන් 
                          පසු ව වුවද බුද්ධිමය අයිතීන් උල්ලංඝණය කළ බවට තහවුරු වුවහොත් එම ලිපි කිසිදු දැනුම්දීමකින් තොරව සඟරාවෙන් ඉවත් කෙරේ. </p>

                        <p>සබුද්ධි සඟරාව ශ්‍රී ලංකාව මුල්කර ගත් පර්යේෂණ සඳහා වැඩි ප්‍රමුඛත්වයක් ලබා දෙන සඟරාවකි. එහි මූලික අරමුණ වන්නේ සිංහල භාෂක සමාජය ඉලක් කර 
                          දැනුම් හුවමාරු කේන්ද්‍රයක් ගොඩ නැඟීමයි. සිංහල භාෂාවෙන් පළ කෙරෙන සියලු ම පර්යේෂණ ලිපි ඉංග්‍රීසි භාෂාවෙන් පරිවර්තනය කර පළ කිරීමේ පහසුකම් ද සුබද්ධි
                           ජාත්‍යන්තර පර්යේෂණ සඟරාව සපය යි.</p>
                    </v-col>

                  </v-row>
                </v-card>
                </center>
              </v-col>


               <v-col cols="4" md="4" class="ml-0">
                <v-card height="1000px" class="White " elevation="0">
                  <v-tabs
                      background-color="#004aae"
                      slider-color="#002352"
                      slider-size="5"
                      color="white"
                      tile
                      block
                      center-active
                      small
                      next-icon="mdi-arrow-right-bold-box-outline"
                      prev-icon="mdi-arrow-left-bold-box-outline"
                      v-model="tabInTableView"
                    >
                      <v-tabs-slider color="yellow"></v-tabs-slider>
                      <v-tab
                        class="v-tab"
                        style="
                          color: white !important;
                          font-family: font-family: Cambria,Georgia,serif;
                          font-size: 15px !important;
                          text-transform: inherit !important;
                        "
                      >
                        <v-icon left small style="color: white !important"
                          >mdi-new-box</v-icon
                        >නවතම ලිපි
                      </v-tab>
                      <v-tab
                        class="v-tab"
                        style="
                          color: white !important;
                          font-family: font-family: Cambria,Georgia,serif;
                          font-size: 15px !important;
                          text-transform: inherit !important;
                        "
                      >
                        <v-icon left small style="color: white !important"
                          >mdi-newspaper</v-icon
                        >ජනප්‍රිය ලිපි
                      </v-tab>
                      <v-tab-item class="v-tab-item">
<!--                        <v-row>-->
<!--                          <v-col cols="12" md="12" >-->
<!--                            <hr>-->

<!--                            <v-card height="auto" class="pa-1">-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->
<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->
<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                          </v-card>-->

<!--                          </v-col>-->
<!--                        </v-row>-->
                      </v-tab-item>

                      <v-tab-item class="v-tab-item">
<!--                        <v-row>-->
<!--                          <v-col cols="12" md="12" >-->
<!--                            <hr>-->

<!--                            <v-card height="auto" class="pa-1">-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->
<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->
<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                            <v-divider></v-divider>-->
<!--                            <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                            </v-card>-->

<!--                          </v-card>-->

<!--                          </v-col>-->
<!--                        </v-row>-->
                      </v-tab-item>

                    </v-tabs>

                </v-card>
              </v-col>
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
