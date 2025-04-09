<template>
    <v-app id="inspire">
      <v-main class="white">
        <v-container fluid class="pa-0">

          <navBar-component></navBar-component>


          <v-container fluid class="mt-6" style="justify-content: center; width: 1200px;">
            <v-row >
              <v-col cols="12" md="12" sm="12" class="pa-0">

                <v-card height="auto" class="White  " elevation="0">
                  <v-row>
                  <v-col cols="8" md="8" class="ml-0">
                    <center>
                        <v-row class="mt-2 ml-2">
                              <v-col cols="12" md="12" >
                                <v-card height="auto" class="pa-1">
                                    <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                      <v-row>
                                      <v-col cols="8">
                                        <p style="font-size: 25px; margin-bottom: 0px;;"><b>ප්‍රධාන සංස්කාරක</b></p>
                                        <p style="font-size: 20px; margin-bottom: 0px;"> සුප්‍රි සමරසිංහ</p>
                                        <p style="font-size:20px ;">ජාතික සංවිධායක, සබුද්ධි සාහිත්‍ය කවය.<br></p>
                                          </v-col>
                                          <v-col cols="4">
                                            <v-img src="/img/Suprii.jpeg" 
                                              alt="Profile"
                                              class=""
                                              style="float:left;width:120px;height:120px; border-radius: 50%;">
                                            </v-img>
                                          </v-col>
                                        </v-row>
                                    </v-card>
                                    <v-divider></v-divider>

                                   <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                    <v-row>
                                      <v-col cols="8">
                                        <p style="font-size:21px; margin-bottom: 20px; margin-left: 0px;"><b>සංස්කාරක උපදේශක මණ්ඩලය</b></p>
                                        <p style="font-size:16px ; margin-left: 10px;">ශාස්ත්‍රපති ම. ප. තමීර මංජු</p>
                                        <p style="font-size:16px ; margin-left: 10px;">සභාපති, සබුද්ධි සාහිත්‍ය කවය.</p>
                                        <p style="font-size:16px ; margin-left: 10px;">ජාත්‍යන්තර පර්යේෂණ හා අධ්‍යයන කවය,</p>
                                        <p style="font-size:16px ; margin-left: 10px;">කොළඹ.</p>
                                      </v-col>
                                      <v-col cols="4">
                                        <v-img src="/img/thameera.png" 
                                              alt="Profile"
                                              class=""
                                              style="float:left;width:120px;height:120px; border-radius: 50%;">
                                            </v-img>
                                          </v-col>

                                    </v-row>
                                    <v-divider></v-divider>
                                    </v-card>

                                  <v-card  class="White pa-5" elevation="0" style="text-align: justify;">

                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>ඉරෝෂණී ගල්හේන</i></b></p>
                                    <p style="font-size:16px; margin-left: 10px;">මහ ලේකම්, සබුද්ධි සාහිත්‍ය කවය.</p>

                                </v-card>





                              <!--   <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>ආචාර්ය හර්ෂ බී. අබේකෝන්</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px;">සහාකාර ප්‍රවෘත්ති අධ්‍යක්ෂ,<br>
                                    රජයේ ප්‍රවෘත්ති දෙපාර්තමේන්තුව.</p>

                                </v-card>


                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>විශාඛා සූරියබණ්ඩාර </i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px;">ජ්‍යේෂ්ඨ කථිකාචාර්ය,<br>
                                    අංශාධිපති, දේශපාලන විද්‍යා අධ්‍යනාංශය,<br>
                                    මානව ශාස්ත්‍ර සහ සමාජීය විද්‍යා පීඨය,<br>
                                    ජයවර්ධනපුර විශ්වවිද්‍යාලය.</p>

                                </v-card>


                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>කල්‍යාණි විජේසුන්දර</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px; ">ජ්‍යේෂ්ඨ කථිකාචාර්ය,<br>
                                    සිංහල අධ්‍යයනාංශය,<br>
                                    ශාස්ත්‍ර පීඨය,<br>
                                    කොළඹ විශ්ව විද්‍යලාය.</p>

                                </v-card>

                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>ෆාතිමා ශානාස්</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px; ">ජ්‍යේෂ්ඨ
                                        කථිකාචාර්ය,<br>
                                        ජනසන්නිවේදන ඒකකය,<br>
                                        ශාස්ත්‍ර පීඨය,<br>
                                        කොළඹ විශ්ව විද්‍යාලය.</p>

                                </v-card>

                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 10px;"><b><i>ශාස්ත්‍රවේදී මිහිර අරවින්ද</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px;">සහකාර අධ්‍යක්ෂ,<br>
                                    ජාතික පුස්තකාල සහ ප්‍රලේඛන සේවා මණ්ඩලය,<br>
                                    කොළඹ.
                                </p>

                                </v-card>

                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 0px;"><b><i>සඟරා සම්න්ධීකාරක</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px; ">ශාස්ත්‍රවේදී තුසිත ජයවර්ධන,<br>
                                    අධ්‍යක්ෂ, <br>
                                    සබුද්ධි ජාත්‍යන්තර පර්යේෂණ සහ අධ්‍යයන කවය,<br>
                                    කොළඹ. </p>

                                </v-card>
                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 0px;"><b><i>තාක්ෂණික උපදේශකත්වය</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px;">ඉනේෂ් මධුෂාන්,<br>
                                    අධ්‍යක්ෂ, සබුද්ධි සාහිත්‍ය කවය,<br>
                                    කොළඹ.</p>

                                </v-card>

                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:19px; margin-bottom: 0px; margin-left: 0px;"><b><i>තාක්ෂණික මෙහයුම් නිලධාරී</i></b></p>
                                    <p style="font-size:16px ; margin-left: 10px;">පසිඳු තරින්ද්‍ර<br>
                                        අධ්‍යක්ෂ,
                                    සබුද්ධි ජාත්‍යන්තර පර්යේෂණ සහ අධ්‍යයන කවය,<br>
                                    කොළඹ.</p>

                                </v-card> -->
                              </v-card>

                              </v-col>
                        </v-row>
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
<!--                            <v-row>-->
<!--                              <v-col cols="12" md="12" >-->
<!--                                <hr>-->

<!--                                <v-card height="auto" class="pa-1">-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->
<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->
<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                              </v-card>-->

<!--                              </v-col>-->
<!--                            </v-row>-->
                          </v-tab-item>

                          <v-tab-item class="v-tab-item">
<!--                            <v-row>-->
<!--                              <v-col cols="12" md="12" >-->
<!--                                <hr>-->

<!--                                <v-card height="auto" class="pa-1">-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->
<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->
<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                                <v-divider></v-divider>-->
<!--                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                </v-card>-->

<!--                              </v-card>-->

<!--                              </v-col>-->
<!--                            </v-row>-->
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
      getAllProduct() {
        // alert('dada');
        let laravel = JSON.parse(window.Laravel);

        console.log(laravel);

        const header = {
          "X-CSRF-TOKEN": laravel.csrfToken,
          "X-Requested-With": "XMLHttpRequest",
          "content-type": "multipart/form-data",
        };

        axios
          .post("/api/getAllProduct", header)
          .then((response) => {
            if (response.data.http_status == "success") {
              console.log("ds", response);
              this.items = response.data.data;

              // this.sub_topic = this.items.sub_topic;
            } else {
            }
          })
          .catch((error) => {
            console.log("Error", error);
          });
      },
    },
  };
  </script>
