<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container fluid>

                <navBarEng-component></navBarEng-component>



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
                                                        <h2 style="font-family: Cambria,Georgia,serif;"><b>About Us</b></h2>
                                                        <p>Sabuddhi Journal (SJ) is an online, international journal covering social studies and its sub-topics specially Sports Science, Media and communication study,
                                                            Language and literature, political science, and social science. We are a peer-reviewed, open-access, online publication that is dedicated to giving scholars
                                                            all around the world a platform. Our goal at Sabuddhi Journal isis to give researchers a trustworthy and easily accessible venue on which to publish their work.
                                                            We are focused on quality and accessibility, ensuring that every piece of research is thoroughly reviewed and easily accessible. Two times a year,
                                                            in May and December, the Sabuddhi journal publishes articles on a variety of scientific and research subjects. </p>

                                                        <p>The Sabuddhi International Journal makes all of its research articles completely open-access. You may read and download it for free. Any research article published in
                                                            Sabuddhi International Journal is permitted to be used and distributed in any media provided the original work is properly cited.</p>

                                                        <p>When submitting research for publication in the Sabuddi International Journal, all authors must assert all forms of intellectual property rights. If it is determined
                                                            that intellectual property rights have been violated even after research articles have been published in the Sabuddhi International Journal,
                                                            the research articles will be immediately and without warning removed from the journal. </p>

                                                        <p>In addition to research papers and survey papers, Sabuddhi International Journal also offers an opportunity to publish Informative Articles, Case Studies, Review Papers,
                                                            Comparative Studies, Dissertation Chapters, Research Proposals or Synopsis, M.Tech / M.E / Ph.D. Thesis, Photo Essay. Sabudhi International
                                                            Journal is exclusively owned by Sabudhi. </p>
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
