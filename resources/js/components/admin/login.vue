<template>
    <div id="app">
        <v-app>
            <v-main>
                <v-container class="fill-height" fluid>
                    <v-row align="center" justify="center">
                        <v-col cols="12" sm="8" md="4"  xs="12" lg="4" xl="4">
                            <v-card
                                style=" background-color: rgba(255, 255, 255, 1);"
                                class=" mx-auto rounded- align-center text-center"
                                tile
                            >
                                <v-row class="mt-0 pt-0">
                                    <v-col cols="12" class="mt-0 pt-0">
                                        <v-flex class="text-center mt-0 pt-0" >

                                            <v-card-title class="justify-center mb-1" style="background-color: #9a1d21 ;">
                                                <h4 style="color: white;">InterNatinaol Journal Of Research</h4>
                                            </v-card-title>

                                            <h2 style="color: #9a1d21">Welcome to Login Page</h2>

                                        </v-flex>
                                    </v-col>
                                </v-row>

                                <v-card-text>
                                    <v-form
                                        v-model="valid"
                                        ref="form"
                                        action="login"
                                        method="post"
                                    >
<!--                                        <v-text-field-->
<!--                                            name="_token"-->
<!--                                            :value="csrf"-->
<!--                                            v-model="csrf"-->
<!--                                            v-show="false"-->
<!--                                        ></v-text-field>-->
                                        <v-text-field
                                            label="Enter your e-mail address"
                                            v-model="email"
                                            :value="email"
                                            name="email"
                                            dense
                                            outlined
                                            :error-messages="email_errors"
                                            :rules="emailRules"
                                            required
                                        ></v-text-field>
                                        <v-text-field
                                            label="Enter your password"
                                            v-model="password"
                                            :value="password"
                                            name="password"
                                            :error-messages="password_errors"
                                            outlined
                                            dense
                                            min="8"
                                            :append-icon="viewPassword ? 'visibility': 'visibility_off'"
                                            @click:append="viewPassword = !viewPassword"
                                            :type="viewPassword ? 'text' : 'password'"
                                            :rules="passwordRules"
                                            required
                                        ></v-text-field>
                                        <v-btn
                                            class="white--text"
                                            small
                                            block
                                            :loading="cardLoader"
                                            @click="submit"
                                            color="#9a1d21"

                                        >Sign Me In</v-btn
                                        >

                                        <v-layout> </v-layout>
                                    </v-form>
                                </v-card-text>
                            </v-card>

                        </v-col>
                    </v-row>
                </v-container>
            </v-main>
        </v-app>
    </div>
</template>

<script>
import axios from "axios";
export default {
    components:{
        axios,
    },
    data() {
        return {
            header:{},
            csrf:"",
            viewPassword: false,
            email:"",
            password:"",
            passwordRules: [v => !!v || "Password is required"],
            emailRules: [
                v => !!v || "E-mail is required",
                v =>
                    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/.test(v) ||
                    "E-mail must be valid"
            ],


        };
    },

    created() {

    },

    mounted() {
        // console.log("Component mounted.");
        let laravel = JSON.parse(window.Laravel);
        this.csrf = laravel.csrfToken;
        this.header = {
            "X-CSRF-TOKEN": this.csrf,
            "X-Requested-With": "XMLHttpRequest",
            "content-type": "multipart/form-data"
        };

    },

    methods: {

        submit() {
            if (this.$refs.form.validate()) {
                this.checkUserLogin();
            }
        },
        checkUserLogin() {
            this.cardLoader = true;

            axios
                .post(
                    "/api/checkLogin",
                    { email: this.email, password: this.password },
                    this.header
                )
                .then(response => {
                    console.log(response.data);
                    this.cardLoader = false;
                    if (response.data.validate == "success") {
                        this.snackMessage = "Login successful.Redirecting...";
                        this.snackColor = "success";
                        this.snackBarTop = true;
                        this.snackbar = true;
                        localStorage.setItem(
                            "user",
                            JSON.stringify(response.data.user)
                        );
                        localStorage.setItem(
                            "token",
                            response.data.access_token
                        );
                        this.$refs.form.$el.submit();
                    } else if (response.data.validate == "invalid_email") {
                        this.snackMessage = "Invalid Email";
                        this.snackColor = "error";
                        this.snackBarTop = true;
                        this.snackbar = true;

                        this.password = "";
                        this.email_errors = [
                            "we cannot find user with this email"
                        ];
                    } else if (response.data.validate == "invalid_password") {
                        this.snackMessage = "Authentication fail";
                        this.snackColor = "error";
                        this.snackBarTop = true;
                        this.snackbar = true;

                        this.password = "";
                        this.password_errors = [
                            "invalid password.try forget password"
                        ];
                    } else {
                        this.snackMessage = response.data.validate;
                        this.snackColor = "error";
                        this.snackBarTop = true;
                        this.snackbar = true;
                        this.password = "";
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        },
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
