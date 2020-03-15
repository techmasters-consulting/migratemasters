<template>

<div>
        <!-- Newsletter Form Input -->
        <form v-show="!submitted" class="newsletter-form" method="post" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
            <flash message=""></flash>
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Your email address" required id="s-email">
                <span class="alert-danger" v-text="errors.get('email')"></span>
                <span class="input-group-btn">
											<button :disabled="errors.any()" class=" submit btn btn-primary tra-white-hover">Subscribe</button>


										</span>
            </div>

            <!-- Newsletter Form Notification -->
            <label for="s-email" class="form-notification"></label>

        </form>
    <div v-show="submitted" data-v-86e98a50="" role="alert" class=" alert-success spacing" >
        Thank You for joining the club. You will be hearing from us in a courteous, friendly and professional manner in accordance with the Data protection and privacy act

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
        name: "NewsletterForm",
        data() {

            return {

                email: '',
                errors: new Errors(),
                submitted:false,

            }
        },
        methods:{
            onSubmit() {
                axios.post('/newsletter', this.$data)
                    .then(response => {
                        this.submitted=true;
                        flash('Your newsletter has been added.', 'success');

                    }).catch(error => {
                    this.errors.record(error.response.data.errors);
                    flash('The given data was invalid.', 'warning');
                    // window.scroll({
                    //     top: 0,
                    //     left: 0,
                    //     behavior: 'smooth'
                    // });
                });
            },
        },





            // error: function (jqXHR, textStatus, errorThrown) {
            //     let msg = '';
            //     if (jqXHR.status == 500) {
            //         //console.log(jqXHR);
            //         //$('#post').html('Internal error: ' + jqXHR.responseJSON.message);
            //         $('#post').html('Internal error: Contact already exists');
            //         $('#postg').html("");
            //         //alert('request failed :'+errorThrown);
            //     } else if (jqXHR.status != 500){
            //         //console.log(jqXHR);
            //         $('#post').html('Unexpected error, refresh the browser and try again later.');
            //         $('#postg').html("");
            //         //alert('request failed :'+errorThrown);
            //     }else {
            //         $('#post').html('Uncaught Error.\n' + jqXHR.responseJSON.message);
            //         $('#postg').html("");
            //     }
            // },
            //


       // });

    //});
    }
</script>

<style scoped>

</style>
