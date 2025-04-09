<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container fluid>

                <navBarEng-component></navBarEng-component>



                <v-container fluid class="mt-6" style="justify-content: center; width: 1200px;">
                    <v-row >
                        <v-col cols="12" md="12" sm="12" class="pa-0">
                            <div>
                                <v-card height="auto" class="White  " elevation="0">
                                    <v-row>

                                        <!-- <v-col cols="3" md="3" class="mr-0">
                                          <img src="/img/4.jpeg"  height="450px" alt="" class="">
                                        </v-col> -->

                                        <v-col cols="8" md="8" class="ml-0">
                                            <v-col cols="12" md="12">
                                                <img src="/img/4.jpeg"  height="450px" alt="" class="" style="float: left; margin-right: 15px;">
                                                <h3 class="mt-5 ml-15" style="color:blue; font-family: Cambria,Georgia,serif;" ><b>Welcome to Sabuddhi international Journal!</b></h3>
                                                <p class="ml-15 mr-2 mt-0" style="font-family: Calibri, sans-serif; font-size: 18px;   text-align: justify;">Sabuddhi international Journal (SJ) is an online,
                                                    international journal covering social studies and its sub-topics specially Sports Science,
                                                    Media and communication study, Language and literature, political science, and social science.  We are a peer-reviewed, open-access,
                                                    online publication that is dedicated to giving scholars all around the world a platform. Our goal at Sabuddhi Journal isis to give
                                                    researchers a trustworthy and easily accessible venue on which to publish their work.  We are focused on quality and accessibility,
                                                    ensuring that every piece of research is thoroughly reviewed and easily accessible. Two times a year, in May and December,
                                                    the Sabuddhi journal publishes articles on a variety of scientific and research subjects.
                                                </p>

                                            </v-col>

                                            <hr style="margin-top: 3px;">
                                            <v-col cols="12" md="12">

                                                <v-row>
                                                    <v-col cols="12" md="12" >

                                                        <h2 style="font-family: Cambria,Georgia,serif;" ><b><a href="/editorBoarderEng">Editorial Secretary</a></b></h2>
                                                        <v-row style="margin-left: 15px;">
                                                            <v-col cols="12" md="12">
                                                                <p style="font-size: 25px; margin-bottom: 0px;;"><b>Editor</b></p>
                                                                <p style="font-size: 20px; margin-bottom: 0px;"> M P Thameera Manju</p>
                                                                <p style="font-size:20px ;">Chairman - Sabudhi,<br>
                                                                    International Research and Study Circle,Colombo,<br> Sri Lanka.<br>
                                                                    </p>
                                                                <v-btn style="margin-left: 600px" href="/editorBoardEng" small>More..</v-btn>
                                                            </v-col>
                                                        </v-row>
                                                        <hr>
                                                        <h2 style="font-family: Cambria,Georgia,serif;"><b>Current region</b></h2>
                                                        <v-row>
                                                            <v-col cols="12" md="12" style="margin-bottom: 10px;">
                                                                <v-app-bar color="#9a1d21" class="pa-2">
                                                                    <p style="font-size: 25px; color: aliceblue;">Volume - 1 Issue - 1 2023</p>
                                                                </v-app-bar>
                                                            </v-col>
                                                        </v-row>

                                                        <v-card height="auto" class="pa-1">
<!--                                                            <v-card height="200px" class="grey lighten-2" elevation="0">-->
<!--                                                                <p></p>-->

<!--                                                            </v-card>-->
<!--                                                            <v-divider></v-divider>-->
<!--                                                            <v-card height="200px" class="grey lighten-2" elevation="0">-->
<!--                                                                <p></p>-->
<!--                                                            </v-card>-->
<!--                                                            <v-divider></v-divider>-->
<!--                                                            <v-card height="200px" class="grey lighten-2" elevation="0">-->

<!--                                                            </v-card>-->
                                                        </v-card>

                                                    </v-col>
                                                </v-row>
                                            </v-col>

                                        </v-col>

                                        <v-col cols="4" md="4" class="ml-0">
                                            <v-card height="1480px" class="White " elevation="0">
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
<!--                                                        <v-row>-->
<!--                                                            <v-col cols="12" md="12" >-->
<!--                                                                <hr>-->

<!--                                                                <v-card height="auto" class="pa-1">-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                </v-card>-->

<!--                                                            </v-col>-->
<!--                                                        </v-row>-->
                                                    </v-tab-item>

                                                    <v-tab-item class="v-tab-item">
<!--                                                        <v-row>-->
<!--                                                            <v-col cols="12" md="12" >-->
<!--                                                                <hr>-->

<!--                                                                <v-card height="auto" class="pa-1">-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->

<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                    <v-divider></v-divider>-->
<!--                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">-->

<!--                                                                    </v-card>-->
<!--                                                                </v-card>-->

<!--                                                            </v-col>-->
<!--                                                        </v-row>-->
                                                    </v-tab-item>

                                                </v-tabs>

                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-card>
                            </div>
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
            tabInTableView: null,

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
        // getAllProduct() {
        //   // alert('dada');

        //   let laravel = JSON.parse(window.Laravel);

        //   console.log(laravel);

        //   const header = {
        //     "X-CSRF-TOKEN": laravel.csrfToken,
        //     "X-Requested-With": "XMLHttpRequest",
        //     "content-type": "multipart/form-data",
        //   };

        //   axios
        //     .post("/api/getAllProduct", header)
        //     .then((response) => {
        //       if (response.data.http_status == "success") {
        //         console.log("ds", response);
        //         this.items = response.data.data;

        //         // this.sub_topic = this.items.sub_topic;
        //       } else {
        //       }
        //     })
        //     .catch((error) => {
        //       console.log("Error", error);
        //     });
        // },
    },
};
</script>

<style>

</style>
