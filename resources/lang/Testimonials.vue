<template>


    <div class="">

<a :href="testimonial.link"
   :id="`testimonial-${++index}`"
   class="is_circle tw-mb-2"
   target="_blank"
   v-for="(testimonial, index) in testimonials"
   @mouseover="updateFeatured(testimonial)"
   @mouseout="clearTimer"
    >

<img v-if="`${testimonial.user}`" :src="`/storage/${testimonial.user.avatar}`"
     :alt="testimonial.title"
     class="rounded-circle img-thumbnail img"
     />
</a>
        <portal to="featured">

        <img   v-if="`${featuredTestimonial.user}`" :src="`/storage/${featuredTestimonial.user.avatar}`"
             :alt="`${featuredTestimonial.user.fname }`"
             class="rounded-circle img-thumbnail img tw-mb-2"
        />
        <p v-text="`${featuredTestimonial.user.fname }  ${featuredTestimonial.user.lname }`"></p>
        <p v-text="featuredTestimonial.excerpt"></p>
            <testimonial-button ></testimonial-button>

        </portal>
    </div>
</template>

<script>
    import PortalVue from 'portal-vue'



    Vue.use(PortalVue)
    export default {
        props:['user'],
        data(){
            return{
                    testimonials:[], featuredTestimonial:{}, timer:null
            };
        },
        methods:{
            getTestimonials(){

if (this.user){
    axios.get('/my-testimonials/'+ this.user).then(response => {
        this. testimonials = response.data;
        this. featuredTestimonial = response.data[0];
        // this. title= response.data.title;
        // this.excerpt= excerpt;
        // this.body= response.data.body;
        // this.make_public= response.data.make_public;
        // this.rate_us= response.data.rate_us;


    });
}else {
    axios.get('/my-testimonials').then(response => {
        this. testimonials = response.data;
        this. featuredTestimonial = response.data[0];
        // this. title= response.data.title;
        // this.excerpt= excerpt;
        // this.body= response.data.body;
        // this.make_public= response.data.make_public;
        // this.rate_us= response.data.rate_us;


    });
}


            },
            // updateFeatured: _.debounce(function(testimonial) {
            //     console.log("testimonial")
            //     this. featuredTestimonial = testimonial;
            // }, 200)
            updateFeatured(testimonial) {
                this.timer = setTimeout(() => {
                    console.log("testimonial");
                    this. featuredTestimonial = testimonial;
                    }, 250);


            },
            clearTimer(){
                clearTimeout(this.timer);
            }

        },
        created() {
            this.getTestimonials();
        },
    }
</script>

<style scoped>

</style>
