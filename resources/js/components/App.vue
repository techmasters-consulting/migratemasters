<template>
    <div>
        <header id="header" class="main-header student-header">
            <div class="header-holder">
                <div class="logo">
<!--                    <router-link :to="{name: 'home'}" >Migration Master</router-link>-->

                <h3>

                    <router-link :to="{ name: 'home' }" class="current"><img src="/images/logo-black.png" width="150" height="62" alt="Migration Master">
                    </router-link></h3>

                </div>
                <a href="#" class="nav-opener"><span></span></a>
                <div class="nav-holder">
                    <nav id="nav">
                        <ul class="nav center-nav">
<!--                            <li class="current"><a href="/dashboard">Dashboard</a></li>-->
<!--                            <li><a href="/tests-dashboard">Take Test</a></li>-->
<!--                            <li class="notification"><a href="/feedback">Feedback</a></li>-->
<!--                            <li><a href="/history">History</a></li>-->
<!--                            <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>-->
<!--                            <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>-->
                            <router-link :to="{ name: 'home' }" class="current">MY PROFILE</router-link>

<!--                            <router-link :to="{ name: 'home' }" class="current" v-if="isLoggedIn">DashBoard</router-link>-->
<!--                            <li v-if="isLoggedIn">-->
<!--                                <a>-->
<!--                                Hi, {{name}}-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li v-if="isLoggedIn">-->
<!--                                <a id="logout-link" href="#" @click.prevent="logout">Logout</a>-->
<!--                            </li>-->

                        </ul>
                    </nav>

                </div>
                <profile-menu v-if="isLoggedIn"></profile-menu>
            </div>
        </header>

<!--        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">-->
<!--            <div class="container">-->
<!--                <router-link :to="{name: 'home'}" class="navbar-brand">Treclon</router-link>-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->

<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                    &lt;!&ndash; Left Side Of Navbar &ndash;&gt;-->
<!--                    <ul class="navbar-nav mr-auto"></ul>-->
<!--                    &lt;!&ndash; Right Side Of Navbar &ndash;&gt;-->
<!--                    <ul class="navbar-nav ml-auto">-->
<!--                        &lt;!&ndash; Authentication Links &ndash;&gt;-->
<!--                        <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>-->
<!--                        <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>-->
<!--                        <li class="nav-link" v-if="isLoggedIn"> Hi, {{name}}</li>-->
<!--                        <router-link :to="{ name: 'board' }" class="nav-link" v-if="isLoggedIn">Board</router-link>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
        <main >
            <div class="account-settings profile style2">

                <flash message=""></flash>
            <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
            </div>
        </main>
    </div>
</template>
<script>
    import ProfileMenu from './ProfileMenu'
    export default {
        components: {ProfileMenu},
        props: ['name', 'token'],
        data(){
            return {
                isLoggedIn : null,
               // name : null
            }
        },
        mounted(){
            localStorage.setItem('user',this.name)
            localStorage.setItem('jwt',this.token)

            // if (localStorage.getItem('jwt') != null){
            //     this.$router.go('/board')
            // }
            this.isLoggedIn = localStorage.getItem('jwt')
            this.name = localStorage.getItem('user')
        },
        methods: {
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
