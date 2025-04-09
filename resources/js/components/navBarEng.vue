<template>

    <v-row >
        <v-col fluid cols="12" md="12" sm="12" class="pa-0">
            <div>
                <v-app-bar color=" darken-1 accent-4" width="100%" height="50%" dense dark >
                    <v-col cols="12" md="12" class="ml-12">
                        <v-btn color=" darken-4" class="mr-1" href="/engdashboard" style="text-decoration: none"> Home Page </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/aboutUsEng" style="text-decoration: none"> About Us </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/sunissionEng" style="text-decoration: none"> Sunission </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/editorBoardEng" style="text-decoration: none"> Editorial Secretary </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/contentEng" style="text-decoration: none"> Current Issue </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/oldContentEng" style="text-decoration: none"> Archive </v-btn>
                        <!-- <v-btn color=" darken-4" class="mr-1" href="/downlload" style="text-decoration: none"> බාගත කිරීම්  </v-btn> -->
                        <v-btn color=" darken-4" class="mr-1" href="/announcementEng" style="text-decoration: none"> Announcement  </v-btn>
                        <v-btn color=" darken-4" class="mr-1" href="/contactEng" style="text-decoration: none"> Contact </v-btn>
                        <v-btn  class="mr-1 " href="/" style="text-decoration: none; color:black; background: white"> <b>Sinhala</b> </v-btn>
                    </v-col>
                </v-app-bar>
            </div>
        </v-col>


        <v-row>
            <v-col cols="12" md="12" sm="12" class="pa-0">
                <div>
                    <v-card height="100px" color="#9a1d21" elevation="0">
                        <center><h2 class="pa-6"  style="font-family: Cambria,Georgia,serif; color: aliceblue; margin-top: 18px"><b>Sabuddhi International Research Journal-SIRJ</b></h2></center>
                    </v-card>
                </div>
            </v-col>
        </v-row>

    </v-row>








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

    },
};
</script>
