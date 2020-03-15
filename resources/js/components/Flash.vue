<template>

    <div class=" alert  spacing"
         v-bind:class="{ 'alert-danger' : hasError, 'alert-success' : hasSuccess}" role="alert" v-show="show">

        {{ body }}

</div>
</template>



<script>

    export default {

        props: ['message'],

        data() {

            return {

                show : false,

                body : '',
                hasError: false,
                hasSuccess: false

            }

        },

        created() {

            if(this.message) {

                this.flash(this.message)

            }

            window.events.$on('flash',(message) => this.flash(message))

        },

        methods: {

            flash(message) {

                this.show = true

                this.body = message

                if(message == 'The given data was invalid.'){
                    this.hasError = true
                }else{
                    this.hasSuccess = true
                }

                setTimeout(() => {

                    this.hide()

                },4000)

            },

            hide() {

                this.show = false;
                this.hasError='';
                    this. hasSuccess= '';

            }

        }

    }

</script>



<style>

    .spacing {



text-align: center;
        /*width:50%;*/

    }

</style>
