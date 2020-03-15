<template>
    <div id="hero-form" class="text-center mb-40">

        <form v-show="!submitted" method="post" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)"  class="row hero-request-form bg-darkblue">

            <!-- Request Form Text -->
            <div class="col-md-12 white-color">
                <flash message=""></flash>
                <h5 class="h5-lg">Start by Requesting Consultation</h5>
            </div>
<!--            <input type="hidden" id="user_role" name="user_role" v-model="name" value="Client">-->
<!--            &lt;!&ndash; Request Form Input &ndash;&gt;-->
            <div id="input-name" class="col-md-12">
                <input type="text" v-model="name" name="name" class="form-control name" placeholder="Enter Your Name*" >
                <span class="alert-danger" v-text="errors.get('name')"></span>
            </div>

            <!-- Request Form Input -->
            <div id="input-email" class="col-md-12">
                <input type="text" name="email" v-model="email" class="form-control email" placeholder="Enter Your Email*" >
                <span class="alert-danger" v-text="errors.get('email')"></span>
            </div>

            <!-- Request Form Input -->
            <div id="input" class="col-md-12">
                <input type="text" name="phoneNo"  v-model="phoneNo" class="form-control" placeholder="Enter Your Phone Number*" >
                <span class="alert-danger" v-text="errors.get('phone')"></span>
            </div>

            <!-- Form Select -->
            <div id="input-visa" class="col-md-12 input-visa">
                <select id="inlineFormCustomSelect2" v-model="visa_for"  name="visa" @change="errors.clear('visa_for')" class="custom-select visa" required>
                    <option value="">I want to go to</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>United Kingdom</option>
                    <option>USA</option>
                    <option>Mauritius</option>
                </select>
<!--                <select  v-model="visa_for" name="visa" placeholder="select one"  class="custom-select visa" >-->
<!--                    <option value="" >I wanna Go to</option>-->
<!--                    <option value="Mauritius">Mauritius</option>-->
<!--                    <option value="Canada">Canada</option>-->

<!--                </select>-->
                <span class="alert-danger" v-text="errors.get('visa_for')"></span>
            </div>

            <!-- Request Form Button -->
            <div class="col-md-12 form-btn">
                <button  :disabled="errors.any()" class="btn btn-primary tra-white-hover submit">Send Request</button>
            </div>

            <!-- Request Form Message -->
            <div class="col-md-12 hero-form-msg text-center">
                <div class="sending-msg"><span class="loading"></span></div>
            </div>

        </form>
   <div v-show="submitted"  class="row hero-request-form bg-white border-info">

<!--       <flash message=""></flash>-->

       <div data-v-86e98a50="" role="alert" class="  spacing" >
           <span class="darkblue-color">Now Prepare for take off!</span>
           <iframe id="cover-video" src="https://player.vimeo.com/video/324214320?api=1&amp;background=1&amp;mute=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" data-ready="true" frameborder="0"></iframe>
           <span class="darkblue-color">
           Thank You for submitting your Request,
           Kindly Verify your email by clicking a link in the email that we have just sent you.
           </span>
       </div>



   </div>

    </div>
</template>

<script>
    class Errors{
        constructor(){

            this.errors={};
        }
        get(field){
            if(this.errors[field])
            {
                return this.errors[field][0];
            }
        }
        record(errors){
            this.errors = errors;
        }
        clear(field){
            delete this.errors[field];
        }
        any(){
            return Object.keys(this.errors).length > 0;
        }
    }
    export default {
        name: "ConsultationForm",
        data(){
            return{
                    name:'',
                    email:'',
                phoneNo:'',
                    visa_for:'',
                // user_role:'Client',
                    errors: new Errors(),
                submitted:false,
            }
        },
       methods:{
           onSubmit() {

               axios.post('/register', this.$data)
                   .then(response => {
                       this.submitted=true;
                       // flash('Kindly Verify your email by clicking a link in the email that we have just sent you.', 'success');
                       // window.scroll({
                       //     top: 0,
                       //     left: 0,
                       //     behavior: 'smooth'
                       // });
                   }).catch(error => {
                   this.errors.record(error.response.data.errors);
                   flash('The given data was invalid.', 'warning');
                   window.scroll({
                       top: 0,
                       left: 0,
                       behavior: 'smooth'
                   });
               });
           },
       }
    }
</script>

<style scoped>

</style>
