<template>
  <v-app >
    <v-main class="white">
      <v-container fluid >
     
       
        <div>
          <!-- Image Row -->
          <v-row >
            <v-col class="col-lg-7 mb-1" >
                <v-img
                src="/img/sri-lanka-emblem.png"
                height="40px"
                width="40px"
                contain
                position="absolute"
                style="margin-left: 2%; "
              ></v-img>
            </v-col>

            <v-col class="col-lg-5">
            <span style="color: black">
              <v-icon color="black">mdi-phone</v-icon>
            Phone: +94710535566 / +94777266315 |
            <v-icon color="black">mdi-email</v-icon>
            Email: admin@sabuddhi.lk </span>
          </v-col>
          </v-row>

          <!-- Content Row Below -->
          
        </div>

        <v-row style="height: 100px; background-color: #fff7c7;">
          <v-img
              src="/img/LOGO.png"
              width="100"
              height="100"
             contain
             position="absolute"
             class="ml-10"
            ></v-img>

            
          </v-row>
          
      
     
     
        <!-- <v-row justify="center" style="background-color:#fffbe7;height: 45px;">
          <v-col cols="3">
            <p style="color: black"><v-icon color="black">mdi-phone</v-icon>
            Phone: +94710535566 / +94777266315</p>
          </v-col>
          <v-col cols="2" class="ml-0">
            <p style="color: black"><v-icon color="black">mdi-email</v-icon>
            Email: admin@sabuddhi.lk</p>
          </v-col>
        </v-row> -->

        <v-row class="no-gutters pa-0">
          <v-col cols="12"> 
            <v-carousel
              hide-delimiters
              cycle
              show-arrows
              class="my-4"
            >
              <v-carousel-item
                v-for="(item, index) in items"
                :key="index"
              >
                <v-card class="recent-item box" :to="item.link" outlined>
                  <v-img :src="item.src" class="white--text" height="600px">
                    <v-container fill-height>
                      <v-layout align-center justify-center>
                        <v-btn
                          icon
                          @click.stop="openImage(item.src)"
                        >
                          <v-icon color="white">mdi-magnify</v-icon>
                        </v-btn>
                      </v-layout>
                    </v-container>
                  </v-img>
                  <!-- <v-card-title class="text-h6">{{ item.title }}</v-card-title>
                  <v-card-subtitle>{{ item.subtitle }}</v-card-subtitle> -->
                </v-card>
              </v-carousel-item>
            </v-carousel>
          </v-col>
        </v-row>

      </v-container>

      <v-container>
   
        <!-- <v-row class="no-gap mt-4 pa-0" style="position: relative; width: auto">
          <v-img
            src="/img/WE05.png"
            height="auto"
            class="transparent-image"
            style="width: auto; opacity: 0.3; margin-top: 12px;"
            contain
          ></v-img>
          <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(64, 64, 64, 0.7);">
          </div>
          
          <div style="position: absolute; left: 70px; top: 60%; transform: translateY(-50%); color: whitesmoke;  font-weight: bold;">
            <p>
            <span style="font-size: 60px;">Where wisdom Comes to Life!</span><br />
          <span style="font-size: 11px;">
            Enlightened Countries Through Literature
            Savvy Societies Through Mass Media
            Wise Citizens Through Study
            Intelligent Individuals Through Sports
          </span>
            </p>
            
          
          </div>

          <v-img
          src="/img/WE06.png"
          style="position: absolute; right: 40px; top: 50%; transform: translateY(-10%); width: 400px; height: 300px;"
          ></v-img>
          
        </v-row> -->

      
   
          <div >
          <v-col cols="12" class="text-center">
            <h1 class="intro">WELCOME TO SABUDDHI </h1>
            <h3>Where wisdom Comes to Life!</h3>
            <p class="lead">
              Sabuddhi is a government-registered, non-commercial literary and social organization in Sri Lanka, composed of passionate and forward-thinking individuals dedicated to positively impacting society. Rooted in the belief that everyone has the potential to contribute meaningfully, Sabuddhi unites the collective intelligence and talents of its members to address societal challenges with innovative solutions. Through its LM2S framework — focusing on literature, media, sports, and study — Sabuddhi strives to cultivate a society where social responsibility and intelligent thinking flourish.
            </p>
          </v-col>
        </div>

        <v-row>
          <v-col cols="col-lg-12 md-lg-12 sm-lg-12">
            <v-img
              src="/img/Project Sampale.png"
              height="auto"
              width="100%"
              contain
            ></v-img>
          </v-col>
        </v-row>
        <div style="background-color: #ff0043;color: black;">
          <center>
            <p style="padding: 2px; font-size: 25px;color: #ffff;">From the Sabudhdhi to Peoples</p>
          </center>
          </div>

        <v-row class="pa-5">
          <v-col cols="col-lg-3 col-md-3 col-sm-12">
            <v-card class="serviceBox_3 d-flex flex-column pt-4" :class="{ 'wow bounceInRight': true } " height="100%">
              <v-img
                src="/img/Sabuddhi - Sports 2.png"
                height="auto"
                width="90%"
                contain
                position="absolute"
                style="margin-left: 2%; "
              ></v-img>
                  <v-card-title class="text-h6"><b> Sports Circle</b></v-card-title>
                  
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>

          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12">
            <v-card class="serviceBox_3 d-flex flex-column pt-4" :class="{ 'wow bounceInRight': true }" height="100%">
              <v-img
                src="/img/Sabuddhi - Litrethure 2.png"
                height="auto"
                width="90%"
                contain
                position="absolute"
                style="margin-left: 2%; "
              ></v-img>
                  <v-card-title class="text-h6"><b>LiteratureCircle</b></v-card-title>
                  
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12 pt-4">
            <v-card class="serviceBox_3 d-flex flex-column" :class="{ 'wow bounceInRight': true }" height="100%">
              <v-img
                src="/img/Sabuddhi - Media 2.png"
                height="auto"
                width="90%"
                contain
                position="absolute"
                style="margin-left: 2%; "
              ></v-img>
                  <v-card-title class="text-h6"><b> Media Circle</b></v-card-title>
                  
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12 pt-4">
            
            <v-card class="serviceBox_3 d-flex flex-column" :class="{ 'wow bounceInRight': true }" height="100%">
              <v-img
                src="/img/Sabuddhi - Study 2.png"
                height="auto"
                width="90%"
                contain
                position="absolute"
                style="margin-left: 2%; "
              ></v-img>
                  <v-card-title class="text-h6"><b> Sports Circle</b></v-card-title>
                  
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
        </v-row>

          <div style="background-color: #fede00;color: black;">
            <p style="padding: 2px; font-size: 25px; margin-left: 50px;"><b>Our Team</b></p>

           
          </div>

          <v-row class="pa-10">
              <!-- Image Section -->
              <v-col cols="12" md="6">
                <v-img
                  src="/img/WE05.png"
                  alt="Placeholder Image"
                  class="custom-image"
                ></v-img>
              </v-col>

              <!-- Text Section -->
              <v-col cols="12" md="6">
                <p class="custom-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula
                  quam vel lorem pulvinar, a dignissim nulla suscipit. Integer posuere,
                  massa ac fermentum fermentum, lorem sapien bibendum nunc, nec
                  fringilla tortor mauris sit amet purus.
                </p>
              </v-col>
            </v-row>


            <v-row class="pa-10">
              <v-col
                cols="12"
                sm="2"
                v-for="(image, index) in images"
                :key="index"
              >
                <v-img
                  :src="image"
                  alt="Image"
                  class="image-style"
                ></v-img>
              </v-col>
            </v-row>


          <div style="background-color: #fede00;color: black;">
          <p style="padding: 2px; font-size: 25px; margin-left: 50px;"><b>Our Recent Work</b></p>
          </div>

          <v-row class="pr-10 pl-10 mt-5">
            <v-col cols="4" md="4" sm="2">
              <p class="mt-5">
                Poetry Rain in Bharat – A New Literary Window on Indo-Sri Lanka Relations
                Set to be held in India from 13th to 26th November 2024, this program aims to strengthen the cultural bond between India and Sri Lanka through the power of poetry.

                Poth Hari Ageyi – A Reading Camp to Cultivate the Habit of Reading
                Held at Siri Piyatissa Dhamma School, located in Maragahadeniya Siri Mahindarama Temple, Matugama, Baduraliya, Sri Lanka.

                Sabuddhi Poth Gula – Exchange Libraries and Reading Hours
                Held at Kosgama Sumedha Vidyalaya, Colombo District.

                Sabuddhi Kawyalankaraya – Poetry Workshop Empowering Rural Poets with Knowledge
                Held at Shailabimbarama, Galkada, Anuradhapura
              </p>
            </v-col>
            <v-col cols="8" md="8" sm="6">
              <v-carousel
              hide-delimiters
              cycle
              show-arrows
              class="my-4"
            >
              <v-carousel-item
                v-for="(item, index) in recentWorkitems"
                :key="index"
              >
                <v-card class="recent-item box" :to="item.link" outlined>
                  <v-img :src="item.src" class="white--text" height="350px">
                    <v-container fill-height>
                      <v-layout align-center justify-center>
                        <v-btn
                          icon
                          @click.stop="openImage(item.src)"
                        >
                          <v-icon color="white">mdi-magnify</v-icon>
                        </v-btn>
                      </v-layout>
                    </v-container>
                  </v-img>
                  <!-- <v-card-title class="text-h6">{{ item.title }}</v-card-title>
                  <v-card-subtitle>{{ item.subtitle }}</v-card-subtitle> -->
                </v-card>
              </v-carousel-item>
            </v-carousel>
            </v-col>
          </v-row>


        <v-row class="pt-0">
          <v-col cols="col-lg-3 col-md-3 col-sm-12">
            <v-card class="serviceBox_3 d-flex flex-column pt-4" :class="{ 'wow bounceInRight': true } " height="100%">
                  <v-icon class="service-icon">mdi-earth</v-icon>
                  <v-card-title class="text-h6"><b>Sabuddhi Sports Circle</b></v-card-title>
                  <v-card-subtitle>
                    Recognizing the importance of advanced sports literature in fostering a strong sports economy, the Sabuddhi Sports Circle seeks to bridge Sri Lankan sports literature with global sports literature. By promoting cross-cultural exchange, we aim to enhance the global reach of Sri Lankan sports narratives and contribute to the development of a vibrant sports culture.
                  </v-card-subtitle>
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>

          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12">
            <v-card class="serviceBox_3 d-flex flex-column pt-4" :class="{ 'wow bounceInRight': true }" height="100%">
                  <v-icon class="service-icon">mdi-rocket</v-icon>
                  <v-card-title class="text-h6"><b>Sabuddhi Literature Circle</b></v-card-title>
                  <v-card-subtitle>
                    The mission of the Sabuddhi Literary Circle is to cultivate an intelligent society by promoting the most powerful form of literature: poetry. Dedicated to strengthening the bonds between Sri Lanka and the global community, the Circle emphasizes the importance of literary connections in fostering regional harmony and mutual growth.  
                  </v-card-subtitle>
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12 pt-4">
            <v-card class="serviceBox_3 d-flex flex-column" :class="{ 'wow bounceInRight': true }" height="100%">
                  <v-icon class="service-icon">mdi-cellphone-android</v-icon>
                  <v-card-title class="text-h6"><b>Sabuddhi Media Circle</b></v-card-title>
                  <v-card-subtitle>
                    The Sabuddhi Media Circle is committed to safeguarding people's media rights and improving media literacy in an ever-changing mass media landscape. Its mission is to advocate for a balanced and responsible media environment by promoting freedom from the media as well as freedom of the media.
                  </v-card-subtitle>
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
          <v-col cols="col-lg-3 col-md-3 col-sm-12 pt-4">
            <v-card class="serviceBox_3 d-flex flex-column" :class="{ 'wow bounceInRight': true }" height="100%">
                  <v-icon class="service-icon">mdi-earth</v-icon>
                  <v-card-title class="text-h6"><b>Sabuddhi Sports Circle</b></v-card-title>
                  <v-card-subtitle>
                    Recognizing the importance of advanced sports literature in fostering a strong sports economy, the Sabuddhi Sports Circle seeks to bridge Sri Lankan sports literature with global sports literature. By promoting cross-cultural exchange, we aim to enhance the global reach of Sri Lankan sports narratives and contribute to the development of a vibrant sports culture.
                  </v-card-subtitle>
                  <!-- <v-card-actions>
                    <v-btn text @click="readMore">read more...</v-btn>
                  </v-card-actions> -->
                </v-card>
          </v-col>
        </v-row>
        

        
      </v-container>
        <v-container fluid>
       


   
        <v-row style="background-color: #fffaaf; margin-top: 5px">
          <!-- About Us Section -->
          <v-col cols="12" sm="6" md="12" >
            <v-card class="pa-4" outlined style="background-color: #fffaaf;">
              <v-card-title class="headline">About Us</v-card-title>
              <v-card-text>
                <p>
                  Sabuddhi is a government-registered, non-commercial literary and social organization in Sri Lanka, comprising passionate and forward-thinking individuals committed to making a positive impact on society. If you share our vision and would like to join us, we’d love to hear from you!
                </p>
                <v-list style="background-color: #fffaaf;">
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon>mdi-map-marker</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                      <v-list-item-title><strong>Address:</strong> Sabuddhi, Chairman, Lake Crest, 2E/F03/U03, Mandawila, Angoda, Sri Lanka. </v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon>mdi-phone</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                      <v-list-item-title><strong>Phone:</strong> +94 777 315 266 / +94 710 535 566</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon>mdi-email</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                      <v-list-item-title>
                        <strong>Email:</strong> <a href="mailto:mail@example.com">admin@sabuddhi.lk</a>
                      </v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </v-card-text>
            </v-card>
          </v-col>
          
        </v-row>
   

      </v-container>
      <v-container fluid style="background-color: black; color: azure;">
<p>copyright @ Sabuddhi . 2024</p>
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
      items: [
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/WE01.png',  },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/WE02.png', },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/WE03.png', },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/WE04.png', },
      ],
      recentWorkitems: [
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/01_Poetry Rain in Bharat.png',  },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/02_Poth Hari Ageyi.png', },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/03_Sabuddhi Poth Gula.png', },
        { title: 'Touch and Swipe', subtitle: 'Mobile', src: '/img/04_Sabuddhi Kawayalankaraya.png', },
      ],
      
      posts: [
        { title: 'Aenean commodo ligula eget dolor', date: 'November 07, 2020', link: '#' },
        { title: 'Temporibus autem quibusdam', date: 'November 05, 2020', link: '#' },
        { title: 'Debitis aut rerum saepe', date: 'November 03, 2020', link: '#' },
        { title: 'Et voluptates repudiandae', date: 'November 02, 2020', link: '#' }
      ],
      tweets: [
        { handle: '@yahooobaba', content: 'Lorem ipsum dolor et, consectetur adipiscing eli', date: '29 September 2020', link: '#' },
        { handle: '@yahooobaba', content: 'Lorem ipsum dolor et, consectetur adipiscing eli', date: '29 September 2020', link: '#' },
        { handle: '@yahooobaba', content: 'Lorem ipsum dolor et, consectetur adipiscing eli', date: '29 September 2020', link: '#' }
      ],
      flickrImages: [
        { src: 'images/flickr/flickr_1.png' },
        { src: 'images/flickr/flickr_2.png' },
        { src: 'images/flickr/flickr_3.png' },
        { src: 'images/flickr/flickr_4.png' }
      ],

      images: [
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/150",
        "https://via.placeholder.com/150",
        // Add more images here
      ],

      // items: [],
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
    // this.getAllProduct();
  },

  methods: {

    openImage(src) {
      // Implement your image opening logic here, e.g., using a lightbox
      window.open(src, '_blank');
    }
   
  },
};
</script>


<style scoped>

.image-style {
  border-radius: 8px;
  width: 80%;
  height: auto;
}
#header-top {
  background-color: #f8f9fa;
  padding: 10px 0;
}

.cart-items {
  background-color: red;
  color: white;
  border-radius: 50%;
  padding: 2px 6px;
  font-size: 14px;
}

.router-link-exact-active {
  font-weight: bold;
}

.transparent-image {
  background-color: transparent;
}

.intro {
  font-size: 2rem;
  font-weight: bold;
}

.lead {
  font-size: 1rem;
}

.serviceBox_3 {
  /* Custom styling for service box */
}

.service-icon {
  font-size: 2rem;
}

.wow {
  /* Your custom animation classes */
}

.bounceInRight {
  /* Your custom animation classes */
}
.recent-item {
  position: relative;
  overflow: hidden;
}

.recent-item .v-img {
  position: relative;
}

.recent-item .v-img .v-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
}

.recent-item .v-card-title,
.recent-item .v-card-subtitle {
  text-align: center;
}

.v-footer {
  background-color: #f5f5f5;
}

.v-card {
  background-color: #ffffff;
}

.v-list-item {
  padding: 0;
}

.v-list-item-icon {
  min-width: 40px;
}

.v-img {
  object-fit: cover;
}
</style>