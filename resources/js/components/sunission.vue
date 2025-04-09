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
                                        <p style="font-size:25px;"><b><i>පර්යේෂණ නිබන්ධන කැඳවීම - ප්‍රකාශන කාලසටහන :</i></b></p>
                                        <p style="font-size:20px ; ">මෙම සඟරාව වසරකට දෙවතාවක් මාර්ගගත ආකෘතියකින් ප්‍රකාශයට පත් කෙරේ.<br><br>
                                            නිකුතුව අංක 1<br>
                                            පර්යේෂණ නිබන්ධන ඉදිරිපත් කිරීමේ කාල රාමුව: ඔක්තෝබර් 01 සිට මාර්තු 31<br>
                                            සමාලෝචන ක්‍රියාවලිය: අවස්ථානුකූලව සිදු කෙරේ <br>
                                            ප්‍රකාශනය: මාර්තු<br><br>

                                            නිකුතුව අංක 2<br>
                                            පර්යේෂණ නිබන්ධන ඉදිරිපත් කිරීමේ කාල රාමුව: අප්‍රේල් 01 සිට සැප්තැම්බර් 31<br>
                                            සමාලෝචන ක්‍රියාවලිය: අවස්ථානුකූලව සිදු කෙරේ <br>
                                            ප්‍රකාශනය: සැප්තැම්බර්
                                        </p>

                                    </v-card>
                                    <v-divider></v-divider>
                                    <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:25px;"><b><i>මූලික උපදෙස් :</i></b></p>
                                    <p style="font-size:20px ; ">පර්යේෂණ ප්‍රතිකා යොමු කිරීමේ දී සියලුම සන්නිවේදන සහ සම්බන්ධීකරණ සිදු කරන්නේ සම්බන්ධීකරණ කතුවරයා සමඟ පමණි. කතුවරුන් කිහිප දෙනකු ඇති විට මුලින් සඳහන් වන කතුවරයා සම්බන්ධීකරණ කතුවරයා ලෙස සැලකේ. 
                                      එබැවින් සම්බන්ධීකරණ කතුවරයාගේ නම පර්යේෂණ පත්‍රිකාවේ මුලින් ම සඳහන් කිරීම අනිවාර්ය වේ.</p>


                                    <p style="font-size:20px">සබුද්ධි සඟරාවේ පළ කෙරෙන සියලුම පර්යේෂණ පත්‍රිකා මීට පෙර කිසිඳු සඟරාවක පළ නො කළ හෝ ඉදිරිපත් නො කළ පර්යේෂණ පත්‍රිකා විය යුතුය. 
                                      ඒ බව සම්බන්ධීකරණ කතුවරයා ලිඛිත සහතිකයක් ලබා දිය යුතුය.</p>

                                    <p style="font-size:20px">සෑම පර්යේෂණ පත්‍රිකාවක් ම සෑම ආකාරයක ම බුද්ධිමය හිමිකම් උල්ලංඝණය නො කළ පත්‍රිකා වීම අනිවාර්ය වේ. පර්යේෂණ පත්‍රිකා සකස් කිරීමේ දී සහ ඉදිරිපත් කිරීමේ දී කිසිදු ආකාරයක බුද්ධිමය හිමිකම් උල්ලංඝණයක් සිදු නො වූ සහ නො කළ බවට සම්බන්ධීකරණ කතුවරයා සහතික කළ යුතුය. 
                                      කිසියම් බුද්ධිමය හිමිකමක් උල්ලංඝණයවී ඇත්නම් එහි සම්පූර්ණ වගකීමෙන් සබුද්ධි සඟරාව නිදහස් වේ. එහි සියලු වගකීම් සම්බන්ධිකරණ කතුවරයාට පැවරේ.
                                    </p>

                                </v-card>

                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:25px"><b><i>පර්යේෂණ පත්‍රිකා ආකෘතිය :</i></b></p>
                                    <p style="font-size:20px">සිංහල භාෂාවෙන් ඉදිරිපත් කෙරෙන සියලුම පර්යේෂණ පත්‍රිකා මෘදු පිටපත සහ පී. ඩී. එෆ්. පිටපත ලෙසින් දෙයාකාරයකින් ඉදිරිපත් කළ යුතුය</p>


                                    <p style="font-size:20px">මෘදු පිටපත ඉස්කෝල පොත අකුරින් ඉදිරිපත් කිරීම අනිවාර්ය වේ. පී. ඩී. එෆ්. පිටපත එෆ්. එම්. අභය අකුරින් ඉදිරිපත් කළ යුතුය. </p>

                                    <p style="font-size:20px">සියලු ආකාරයේ පිටපත්වල අක්ෂර ප්‍රමාණය 12 කි. වැකි පරතය 1.5කි. කොන් පරතරය වම, දකුණ සහ ඉහළින් අඟල් 1 බැගින් තැබිය යුතුය.
                                    පහළින් කොන් පරතරය අඟල් 1.5ක් විය යුතුය. </p>

                                    <p style="font-size:20px">සෑම පර්යේෂණ පත්‍රිකාවක් ම ආරම්භ කළ යුත්තේ පර්යේෂණ මාතෘකාවෙනි. මාතෘකාවට යටින් කතුවර නම හෝ නම් සඳහන් කළ යුතුය.
                                    කතුවරුන් කිහිප දෙනකු සිටින විට සම්බන්ධීකරණ කතුවරයාගේ නම මුලින් සඳහන් කිරීම අනිවාර්ය වේ. කතුවර නම් යටින් සියලු දෙනාගේ
                                    විද්‍යුත් තැපෑල ලිපින සඳහන් කළ යුතුය. සාරසංක්ෂේපය සඳහන් කළ යුත්තේ ඉන් පසුවයි.</p>

                                    <p style="font-size:20px">සෑම පර්යේෂණ ප්‍රතිකාවක් ම මුඛ්‍ය පද පහකට සීමා විය යුතුය. පර්යේෂණ නිබන්ධනයේ වචන ප්‍රමාණය 8000ට නො වැඩි විය යුතුය. 
                                      නිබන්ධනයේ මූලාශ්‍ර APA හත්වැනි සංස්කරණයට අනුකූල විය යුතුය. </p>
                                </v-card>
                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:25px"><b><i>ප්‍රකාශන ගාස්තු :</i></b></p>
                                    <p style="font-size:20px">සබුද්ධි ජාත්‍යන්තර පර්යේෂණ සඟරාව ප්‍රකාශන ගාස්තු අය නො කරයි. සේවා ගාස්තු සඳහා  පමණක් දේශීය කතුවරුන්ගෙන් දහසක
                                        මුදලක් අය කෙරේ. විදේශික කතුවරුන්ගෙන් ඩොලර් 20ක් අය කෙරේ. සේවා ගාස්තු ගෙවීම් විස්තර පර්යේෂණ ප්‍රතිකාව සඳහා ප්‍රකාශන අනුමැතිය
                                        ලබා දීමෙන් පසුව විද්‍යුත් තෑපෑලෙන් සම්න්ධීකරණ කතුවරයාට දැනුම් දේ. සිංහල භාෂාවෙන් රචිත පර්යේෂණ පත්‍රිකා  ඉංග්‍රීසි භාෂාවෙන් පළ කරන්නේ
                                        නම් ඒ සඳහා  සේවා ගාස්තු අය කෙරේ. එම අයකිරීම පර්යේෂණ පත්‍රිකාව අනුරූපීව වෙනස් වේ. </p>
                                </v-card>

                                <v-divider></v-divider>
                                <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                  <p style="font-size:25px"><b><i>ප්‍රකාශන ඉදිරිපත් කිරීම :</i></b></p>
                                  <p style="font-size:20px">සියලු ප්‍රකාශන sabuddhi@publication.lk වෙබ් ලිපිනයට යොමු කළ යුතුය. සියලු ම
                                    යොමු කිරීම්වල දී බුද්ධිමය හිමිකම් පත්‍රය  ඉදිරිපත් කිරීම අනිවාර්ය වේ.. </p>
                                </v-card>

                                <v-divider></v-divider>
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
