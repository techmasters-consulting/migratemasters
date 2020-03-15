<template>
<!--    <ul id="dropdown" class="profile-menu">-->
<!--         <a href="#" v-on:click.prevent="showDropDown=!showDropDown">-->
<!--            Catness-->
<!--            <img src="" alt="avatar">-->
<!--            <i :class="{ 'fa-caret-up': showDropDown, 'fa-caret-down': !showDropDown }" class="fa" aria-hidden="true"></i>-->
<!--        </a>-->

<!--                       <div v-if="showDropDown">-->
<!--                           <ul class="menu list pl0 pa0 ma0">-->
<!--                               <li v-for="link in links" class="list">-->
<!--                                   <a href="#" class="dd-link pointer hover-bg-moon-gray">{{link.name}}</a>-->
<!--                               </li>-->
<!--                           </ul>-->
<!--                       </div>-->
<!--                   </ul>-->


                   <ul class="profile-menu" >
        <li class="d-none d-md-block">
            <a href="/my-account" class="name">{{name}} </a>


        </li>
        <li class="profile_ic dropdown">

            <a href="#" class="dropdown-toggle" role="button" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="border-radius: 50%" :src="ProfileAvatar" alt="">


                <!--                                    <img :src="avatar"  />-->



            </a>
            <div class="dropdown-menu" aria-labelledby="profile_dropdown">
                <a href="#" class="dropdown-item d-md-none">{{name}}</a>
                <router-link :to="{ name: 'updateprofile' }" class="dropdown-item" > My Profile</router-link>
                <router-link :to="{ name: 'board' }" class="dropdown-item" > My Applications</router-link>
                <router-link :to="{ name: 'stories' }" class="dropdown-item" > My Stories</router-link>
                <router-link :to="{ name: 'account' }" class="dropdown-item" > My Account</router-link>
<!--                <a class="dropdown-item" href="/billing">My Plans</a>-->



                           <a id="logout-link" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>


            </div>
        </li>
</ul>
</template>

<script>
    export default {
        name: "ProfileMenu",
       //  data(){
       //      return{
       //
       //          name: 'john doe',
       //          avatar: 'images/header/profile_ic.jpg',
       //          role: '',
       //
       //
       //
       //      }
       //
       //  },
       // // methods:{
//             logout(){
//                 axios.post('/logout').then(response => {
// alert("res");
//                     localStorage.clear()
//                         //.setItem('user',response.data.success.name)
//                     //localStorage.setItem('jwt',response.data.success.token)
//                     this.$router.go('/login')
//                     if (localStorage.getItem('jwt') == null){
//
//                     }
//
//             //});
//         })
//             }
//         },
//         // created() {
//         //     this.getUserProfile();
         //},

        data(){
            return {

                ProfileAvatar: '',
                isLoggedIn : null,
                name : null
            }
        },
        mounted(){
            this.isLoggedIn = localStorage.getItem('jwt')
            this.name = localStorage.getItem('user')
            this.getProfilepic();
            //console.log(this.getProfilepic());
            setInterval(() =>  this.getProfilepic(), 5000);
        },
        methods: {
            getProfilepic(){
                axios.get("/userProfileGet").then(({ data }) => {
                  let pic = data.filePhoto;
                  // console.log(this.ProfileAvatar);
                    let prefix = '/images/';
                    this.ProfileAvatar =  prefix + pic;
                });

            },
            logout(evt) {
                if(confirm("Are you sure you want to log out?")) {

                    axios.post('/logout', evt ).then(response => {
                        alert('failes');
                        localStorage.removeItem('auth_token');

                        // remove any other authenticated user data you put in local storage

                        // Assuming that you set this earlier for subsequent Ajax request at some point like so:
                        // axios.defaults.headers.common['Authorization'] = 'Bearer ' + auth_token ;
                        delete axios.defaults.headers.common['Authorization'];

                        // If using 'vue-router' redirect to login page
                        this.$router.go('/login');
                    })
                        .catch(error => {

                            // If the api request failed then you still might want to remove
                            // the same data from localStorage anyways
                            // perhaps this code should go in a finally method instead of then and catch
                            // methods to avoid duplication.
                            localStorage.removeItem('auth_token');
                            delete axios.defaults.headers.common['Authorization'];
                            alert('fail')
                            //this.$router.go('/login');
                            this.$router.go('/')
                        });
                }
            }
        }
    }
</script>

<style scoped>

</style>
