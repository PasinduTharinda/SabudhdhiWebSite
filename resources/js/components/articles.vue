<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container fluid class="pa-0">

                <navBar-component></navBar-component>



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
                                            <v-card  height="auto" class="White  " elevation="0">
                                                <p style="margin-left: 15px"><b>2023 Dec : valume 1 - Issue 1</b></p>
                                                <v-col cols="12" md="12" class="mb-0">
                                                    <v-card  height="auto" class="White  " elevation="0">
                                                        <p style="font-size: 25px;">Three-Dimensional Numerical Simulation for Lateral Distortional Buckling Behaviour of Steel-Concrete Composite Beams</p>
                                                        <p style="font-size: 15px"><b>Authors:</b> W. M. A. D. Wijethunge , A. J. Dammika, C. S. Bandara, J. A. S. C. Jayasinghe</p>
                                                        <hr>
                                                    </v-card>
                                                </v-col>

                                                <v-col cols="12" md="12" class="mt-0">

                                                    <p style="font-size: 25px">Abstract</p>
                                                    <p style="font-size:15px;">Lateral Distortional Buckling (LDB) is a mode of instability in Steel-Concrete Composite (SCC)
                                                        beams that is yet to be fully understood by the structural engineering research and design community.
                                                        This work investigated numerical methods to understand the LDB behavior of SCC beams under negative moments that exhibit
                                                        nonlinear behavior. Focus of the study was to develop and validate 3-Dimensional finite element (FE) models which capture
                                                        the LDB behavior of SCC beams precisely. Detailed 3-Dimensional FE models of the SCC beams were developed using ABAQUS.
                                                        For modeling concrete, a nonlinear damage plasticity model was considered. A quad-linear curve was used to describe the
                                                        stress-stain relationship for the steel beam. The stress-stain relationship for the rebar was described using a bi-linear
                                                        curve while an elastic perfectly plastic model was assigned to the headed stud shear connectors. Steel hardening behavior was
                                                        simulated using an isotropic hardening model. The interaction between the concrete slab, steel beam, and studs was described
                                                        using appropriate interface elements combined under suitable constraints. The FE model’s accuracy was validated by results
                                                        obtained from previous experiments found in literature together with a brief description of the experiments done by previous
                                                        researchers to ensure completeness. Validation of the model was done by comparing Moment-Rotation curves obtained from the
                                                        experimental tests, lateral displacements of the bottom flange along the axial direction and comparison of the failure modes
                                                        between the numerical model and experimental test specimens. It was observed that the maximum relative error for the ultimate
                                                        moment capacity of the composite beams from FE analysis and the experimental tests was less than 2% which shows that the FE
                                                        model was in strong agreement with the experimental results. Accordingly, the numerical model developed herein proves to be
                                                        capable of accurately representing the LDB phenomenon.</p>
                                                    <p></p>

                                                    <p style="font-size:15px"><b>Keywords:</b> Steel-concrete composite beam, Lateral distortional buckling, Negative moment, Nonlinear FE analysis</p>
                                                    <p style="font-size:15px"><b>How to Cite:</b>Wijethunge, W.M.A.D., Dammika, A.J., Bandara, C.S. and Jayasinghe, J.A.S.C., 2023. Three-Dimensional Numerical Simulation for Lateral Distortional Buckling Behaviour of Steel-Concrete Composite Beams. Engineer: Journal of the Institution of Engineers, Sri Lanka</p>
                                                    <hr>

                                                    <p><b>Submitted:</b> January 12, 2022

                                                        <b>Accepted:</b> May 22, 2022  <b>☑</b> Peer Reviewed</p>

                                                </v-col>

                                                <v-row>
                                                <v-btn class="ml-5">Download (En)</v-btn>
                                                <v-btn class="ml-5">Download (Sin)</v-btn>
                                                </v-row>
                                            </v-card>
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
                          font-family:Cambria,Georgia,serif;
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
                          font-family: Cambria,Georgia,serif;
                          font-size: 15px !important;
                          text-transform: inherit !important;
                        "
                                                    >
                                                        <v-icon left small style="color: white !important"
                                                        >mdi-newspaper</v-icon
                                                        >ජනප්‍රිය ලිපි
                                                    </v-tab>
                                                    <v-tab-item class="v-tab-item">
                                                        <v-row>
                                                            <v-col cols="12" md="12" >
                                                                <hr>

                                                                <v-card height="auto" class="pa-1">
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                </v-card>

                                                            </v-col>
                                                        </v-row>
                                                    </v-tab-item>

                                                    <v-tab-item class="v-tab-item">
                                                        <v-row>
                                                            <v-col cols="12" md="12" >
                                                                <hr>

                                                                <v-card height="auto" class="pa-1">
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>

                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                    <v-divider></v-divider>
                                                                    <v-card height="150px" class="grey lighten-2" elevation="0">

                                                                    </v-card>
                                                                </v-card>

                                                            </v-col>
                                                        </v-row>
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
