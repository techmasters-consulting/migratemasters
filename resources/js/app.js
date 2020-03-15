import Profile from "./components/Profile";

require('./bootstrap');
window.Vue = require('vue');
window.events = new Vue();
window.flash = function(message) {

    window.events.$emit('flash', message);

}

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import PortalVue from 'portal-vue'
Vue.use(PortalVue)
import moment from 'moment';
//filter the display to uppercase
Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

//filter the display for date format with moment
Vue.filter('myDate',function(created){
    return moment(created).format('MMMM Do YYYY');
});
//sweetalert dev
import Swal from 'sweetalert2'

window.Toast = Toast;
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

//sweetalert ends here
window.Fire =  new Vue();

//vue form package for form validation and http request
window.Form = Form;

import { Form, HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//vue form package ends here
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '3px'
})

import App          from './components/App'
import Dashboard    from './components/Board'
import Login        from './components/Login'
import Register     from './components/Register'
import Home         from './components/Welcome'
import StudyGoalsForm      from './components/StudyGoalsForm'
import WorkGoalsForm      from './components/WorkGoalsForm'
import BackgroundInfo      from './components/BackgroundInfo'
import TestimonialForm      from './components/TestimonialForm'
import Stories      from './components/Testimonials'
import UpdateProfile      from './components/Welcome'
const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/board',
            name: 'board',
            component: Dashboard,
        },
        // {
        //     path: '/logout',
        //     name: 'logout',
        //     component: Home,
        // },
        {
            path: '/profile',
            name: 'updateprofile',
            component: UpdateProfile,
        },
        {
            path: '/account',
            name: 'account',
            component: Profile,
        },
        {
            path: '/stories',
            name: 'stories',
            component: Stories,
        },
    ],
});
router.replace({ path: '/', redirect: '/' })
export default router

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

const page= new Vue({
    el: '#page',
});
