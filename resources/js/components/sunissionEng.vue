<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container fluid>

                <navBarEng-component></navBarEng-component>



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
                                                            <p style="font-size:25px;"><b><i>01) Call For Papers - Publication Schedule : </i></b></p>
                                                            <p style="font-size:20px ; ">This journal is published 2 times per year in an online format.</p>

                                                            <p style="font-size:20px">Issue No. 1 <br>
                                                                Paper Submission Deadline:1st July – 30th July<br>
                                                                Review Process:1st July – 30th September<br>
                                                                Publication: November</p>

                                                            <p style="font-size:20px">Issue No. 2 <br>
                                                                Paper Submission Deadline:1st January – 30th January <br>
                                                                Review Process:1st February– 30th March <br>
                                                                Publication: May</p>


                                                        </v-card>

                                                        <v-divider></v-divider>
                                                        <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                                            <p style="font-size:25px"><b><i>02). Basic instructions  :</i></b></p>
                                                            <p style="font-size:20px">All communication and coordination are done only with the corresponding author. When there are multiple authors,
                                                                the first mentioned author is considered the corresponding author. Therefore, it is mandatory to mention the name of the
                                                                corresponding author first in the manuscript.</p>


                                                            <p style="font-size:20px">All manuscripts to be published in Sabuddhi International Journal must be manuscripts that have not been published or presented in any other journal before.
                                                                The corresponding author must provide written confirmation to that effect. </p>

                                                            <p style="font-size:20px">All manuscripts must be free of intellectual property infringement. The corresponding author shall ensure that no intellectual property infringement of any kind has
                                                                occurred and has not been committed during the preparation of the manuscripts and their submission. If any intellectual property is violated,
                                                                Sabudhi is freed from its full responsibility. All responsibility rests with the corresponding author. </p>
                                                        </v-card>
                                                        <v-divider></v-divider>
                                                        <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                                            <p style="font-size:25px"><b><i>03) Format of the manuscript: :</i></b></p>
                                                            <p style="font-size:20px">All manuscripts submitted for publication in the Sabuddhi International Research Journal should be
                                                                submitted as soft copies. Download the document below for basic guidelines for manuscripts. </p>
                                                        </v-card>

                                                        <v-divider></v-divider>
                                                        <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                                            <p style="font-size:25px"><b><i>04)Publication Charges :</i></b></p>
                                                            <p style="font-size:20px">Sabuddhi International Research Journal does not charge any publication fees. Only service fees will be charged. The service fee is Rs. 1000 for local
                                                                authors and $20 for foreign authors. Service fee payment details will be communicated to the corresponding author by email after
                                                                publication approval for the journal. The charge varies according to the research paper. </p>
                                                        </v-card>

                                                        <v-divider></v-divider>

                                                        <v-card  class="White pa-5" elevation="0" style="text-align: justify;">
                                                            <p style="font-size:25px"><b><i>05) Submission of manuscript:</i></b></p>
                                                            <p style="font-size:20px">All manuscripts should be mailed to sabuddhi@publication.lk. Submission of intellectual property rights is mandatory
                                                                in all referrals. </p>
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
                                                    >Latest articles
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
                                                    >Popular articles
                                                </v-tab>
                                                <v-tab-item class="v-tab-item">
<!--                                                    <v-row>-->
<!--                                                        <v-col cols="12" md="12" >-->
<!--                                                            <hr>-->

<!--                                                            <v-card height="auto" class="pa-1">-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->
<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->
<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                            </v-card>-->

<!--                                                        </v-col>-->
<!--                                                    </v-row>-->
                                                </v-tab-item>

                                                <v-tab-item class="v-tab-item">
<!--                                                    <v-row>-->
<!--                                                        <v-col cols="12" md="12" >-->
<!--                                                            <hr>-->

<!--                                                            <v-card height="auto" class="pa-1">-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->
<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->
<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                                <v-divider></v-divider>-->
<!--                                                                <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                </v-card>-->

<!--                                                            </v-card>-->

<!--                                                        </v-col>-->
<!--                                                    </v-row>-->
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
