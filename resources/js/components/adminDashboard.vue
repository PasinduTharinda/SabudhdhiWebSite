<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <v-container fluid class="pa-0">

                <navBar-component></navBar-component>



                <v-container fluid class="mt-6" style="justify-content: center; width: 1200px;">
                    <v-row>
                        <v-col cols="12" md="12">
                            <v-col cols="12" md="12">
                                <v-chip class="mb-1"> Head Title </v-chip>
                                <v-text-field
                                    class="mt-5 mb-2"
                                    outlined
                                    dense
                                    color="blue darken-4"
                                    clearable
                                    label="Head Title"

                                ></v-text-field>
                            </v-col>
                            <v-col cols="12" md="12">
                                <v-chip class="mb-1"> Sub  Title </v-chip>
                                <v-text-field
                                    class="mt-5 mb-2"
                                    outlined
                                    dense
                                    color="blue darken-4"
                                    clearable
                                    label="Sub Title"

                                ></v-text-field>
                            </v-col>

                            <v-col cols="12" md="12">
                                <v-chip class="mb-1"> Abstract </v-chip>
                                <v-textarea
                                    class="mt-5 mb-2"
                                    outlined
                                    dense
                                    color="blue darken-4"
                                    clearable
                                    label=""

                                ></v-textarea>
                            </v-col>
                            <v-col cols="12" md="12">
                                <v-chip class="mb-1"> KeyWords </v-chip>
                                <v-text-field
                                    class="mt-5 mb-2"
                                    outlined
                                    dense
                                    color="blue darken-4"
                                    clearable
                                    label="KeyWords"

                                ></v-text-field>
                            </v-col>

                            <v-col cols="12" md="12">
                                <v-chip class="mb-1"> How to Site </v-chip>
                                <v-textarea
                                    class="mt-5 mb-2"
                                    outlined
                                    dense
                                    color="blue darken-4"
                                    clearable
                                    label="How to Site"

                                ></v-textarea>
                            </v-col>

                            <!--Submitted: December 09, 2022 KST  Accepted: February 21, 2023 KST-->

                        </v-col>
                        <v-btn color="success" style="margin-left: 1100px">
                            save
                        </v-btn>
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

        };
    },

    created() {

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
