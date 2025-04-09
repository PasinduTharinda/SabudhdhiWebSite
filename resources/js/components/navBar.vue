<template>
  
  

   <div>       
  
          <!-- Logo Section -->
          
            <!-- <v-img
              src="/img/Logo.png" 
              alt="Logo"
              class="logo"
            ></v-img>
          

          <div class="text-container">
            <h1 class="journal-title">Sabuddhi Journal</h1>
            <div class="additional-info">
              <span class="open-access">Open Access Journal</span>
              <span class="issn">ISSN - 4789</span>
            </div>
          </div> -->
          
<!-- 
          <v-img
              src="/img/HeadWeb.png" 
              alt="Logo"
              class="logo"
              width="100%"
              height="150px"
              
            ></v-img> -->

          <div class="divHeaderLogo">
            <v-col cols="12" style="background-color: #ffe56e;" class="colslogo">
              <v-img
              src="/img/HeadWeb.png" 
              alt="Logo"
              class="HeadWebLogo"
              width="35%"
              height="80px"
              contain
              style="display: block; margin-left: auto; margin-right: auto;"
              
            ></v-img>
            </v-col>
          </div>

          <div class="navbaritems">   
          <v-col cols="12" md="12" sm="12" class="mb-2 pa-0" style="margin-top: 5px; text-align: center;">
              <v-app-bar color="#ffe56e" width="100%" height="50%" dense dark class="pa-0 m-0">
                  <v-col cols="12" md="12" style="text-align: center;" >
                      <v-btn text class="togglebtn" @click="toggleMenu">Menu</v-btn>  
                      <div class="navBarBtnItems">
                      <v-btn text color="black" class="mr-1" href="/" style="text-decoration: none">Home Page</v-btn>
                      <v-btn text color="black" class="mr-1" href="/aboutus" style="text-decoration: none">About Us</v-btn>
                      <v-btn text color="black" class="mr-1" href="/sunission" style="text-decoration: none">Sunission</v-btn>
                      <v-btn text color="black" class="mr-1" href="/editorBoard" style="text-decoration: none">Editorial Secretary</v-btn>
                      <v-btn text color="black" class="mr-1" href="/content" style="text-decoration: none">Current Issue</v-btn>
                      <v-btn text color="black" class="mr-1" href="/oldcontent" style="text-decoration: none">Archive</v-btn>
                      <v-btn text color="black" class="mr-1" href="/announcement" style="text-decoration: none">Announcement</v-btn>
                      <v-btn text color="black" class="mr-1" href="/contact" style="text-decoration: none">Contact</v-btn>
                    </div>
                  </v-col>
              </v-app-bar>
          </v-col>
      </div>
              

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
        items: [],
      };
    },

    created() {

    },

    mounted() {
      // console.log("Component mounted.");
      // this.getAllProduct();
    },

    methods: {
      toggleMenu() {
            var menuItems = document.querySelector('.navBarBtnItems');
            if (menuItems.style.display === 'flex') {
                menuItems.style.display = 'none';
            } else {
                menuItems.style.display = 'inline-block';
            }
        }

    },
  };
  </script>

<style scoped>


.logo {
  width: 100%;        /* Fit the width of the column */
  height: auto;       /* Maintain aspect ratio */
  max-height: 100%;   /* Prevent overflow beyond container height */
  object-fit: contain;/* Scale image proportionally to fit */
  display: block;     /* Center if needed */
  margin: 0 auto;
  
}


.text-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.journal-title {
  font-family: 'Cambria', Georgia, serif;
  color: red;
  font-size: 28px;
  font-weight: bold;
  margin: 0;
}

.additional-info {
  display: flex;
  align-items: center;
}

.open-access {
  font-family: 'Cambria', Georgia, serif;
  color: black;
  font-size: 16px;
  margin-right: 10px;
}

.issn {
  font-family: 'Cambria', Georgia, serif;
  color: red;
  font-size: 16px;
}

.togglebtn{
   
   display: none;
}


  @media screen and (max-width: 600px) {
    .divHeaderLogo v-col{
      max-width: 600px;
    }

    .colslogo{
      background-color: none;
    }
    .HeadWebLogo {
      width: 100%;
      height: 100px;
      
    }
  

    .navBarBtnItems{
      float: none;
      display: none;
      text-align: left;
      
      
    }
    .togglebtn {
        display: inline-block;
        font-size: 15px; 
        cursor: pointer;
        color: blue; 
        float: right;
    }


    
  }










  /* @media (min-width: 601px) {
    .HeadWebLogo {
      width: 35%;
      height: 80px;
    }
  } */
</style>
