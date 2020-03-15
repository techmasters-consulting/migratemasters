<template>
<div>
    <form  method="POST" action="/updateTestimonial" @submit.prevent="onSubmit"
           @change="errors.clear($event.target.name)">


        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control" v-model="title" id="title">
                    <span class="help is-danger" v-text="errors.get('title')"></span>
                </div>

            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea  name="excerpt"  v-model="excerpt" class="form-control" id="excerpt"></textarea>
                    <span class="help is-danger" v-text="errors.get('excerpt')"></span>
                </div>

            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea  name="body"  v-model="body" class="form-control" id="body"></textarea>
                </div>
                <span class="help is-danger" v-text="errors.get('body')"></span>
            </div>



            <div class="col-md-6">
                <div class="form-group">



                            <div class="page__group">
                                <div class="rating">
                                    <input type="radio" value="1" v-model="rate_us"  name="rate_us" class="rating__control" id="rc6">
                                    <input type="radio" value="2" v-model="rate_us" name="rate_us" class="rating__control" id="rc7">
                                    <input type="radio" value="3" v-model="rate_us"  name="rate_us" class="rating__control" id="rc8" checked>
                                    <input type="radio" value="4" v-model="rate_us"  name="rate_us" class="rating__control" id="rc9">
                                    <input type="radio" value="5" v-model="rate_us"  name="rate_us" class="rating__control" id="rc10">
                                    <label for="rc6" class="rating__item">
                                        <svg class="rating__star">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <span class="rating__label">1</span>
                                    </label>
                                    <label for="rc7" class="rating__item">
                                        <svg class="rating__star">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <span class="rating__label">2</span>
                                    </label>
                                    <label for="rc8" class="rating__item">
                                        <svg class="rating__star">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <span class="rating__label">3</span>
                                    </label>
                                    <label for="rc9" class="rating__item">
                                        <svg class="rating__star">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <span class="rating__label">4</span>
                                    </label>
                                    <label for="rc10" class="rating__item">
                                        <svg class="rating__star">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <span class="rating__label">5</span>
                                    </label>
                                </div>
                                <span class="page__hint">Rate Us</span>
                            </div>


                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                        <symbol id="star" viewBox="0 0 26 28">
                            <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"/>
                        </symbol>
                    </svg>
                </div>
            </div>

            <div class="col-md-6">
                <label>Make Public</label>

                <div class="checkbox_small">
                    <div class="check-inner">
                        <input type="radio" id="yes" value="yes" v-model="make_public" name="make_public" checked>
                        <label for="yes">Yes</label>
                    </div>

                    <div class="check-inner">
                        <input type="radio" id="No" value="No" v-model="make_public" name="make_public">
                        <label for="yes">No</label>
                    </div>
                </div>
                <span class="help is-danger" v-text="errors.get('make_public')"></span>
            </div>
        </div>

        <div class="btn-con">
            <button class="btn full" type="submit" :disabled="errors.any()">Save</button>
        </div>
    </form>
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
        //props: ['study_goals'],
        data() {

            return {

                title: '',
                excerpt: '',
                body: '',
                make_public: '',
                tag: '',
                errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {
                // let rate_us =this.rate_us.serialize();
                //     this.$data.push(rate_us);
                axios.post('/testimonials/store', this.$data)
                    .then(response => {
                        flash('Your testimonial has been added.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
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

        },

    }


</script>

<style scoped>
    .rating{
        --uiRatingSize: var(--ratingSize, 20px);
        --uiRatingColor: var(--ratingColor, #eee);
        --uiRatingColorActive: var(--ratingColorActive, #ffcc00);
        --uiRatingStroke: var(--ratingStroke, #222);
        --uiRatingStrokeWidth: var(--ratingStrokeWidth, 1px);

        display: flex;
        font-size: var(--uiRatingSize);
        color: var(--uiRatingColor);
        position: relative;
    }

    .rating__control{
        position: absolute;
        left: -9999px;
    }

    .rating__control:nth-of-type(1):focus ~ .rating__item:nth-of-type(1):before,
    .rating__control:nth-of-type(2):focus ~ .rating__item:nth-of-type(2):before,
    .rating__control:nth-of-type(3):focus ~ .rating__item:nth-of-type(3):before,
    .rating__control:nth-of-type(4):focus ~ .rating__item:nth-of-type(4):before,
    .rating__control:nth-of-type(5):focus ~ .rating__item:nth-of-type(5):before{
        content: "";
        box-shadow: 0 0 0 4px var(--uiRatingColorActive);

        position: absolute;
        top: -.15em;
        right: 0;
        bottom: -.15em;
        left: 0;
        z-index: -1;
    }

    .rating__item{
        -webkit-tap-highlight-color: transparent;
        cursor: pointer;
        position: relative;
    }

    .rating__item{
        padding-left: .25em;
        padding-right: .25em;
    }

    .rating__star{
        display: block;
        width: 1em;
        height: 1em;

        fill: currentColor;
        stroke: var(--uiRatingStroke);
        stroke-width: var(--uiRatingStrokeWidth);
    }

    .rating__label{
        position: absolute;
        top: 0;
        left: -9999px;
    }

    .rating:hover,
    .rating__control:nth-of-type(1):checked ~ .rating__item:nth-of-type(1),
    .rating__control:nth-of-type(2):checked ~ .rating__item:nth-of-type(-n+2),
    .rating__control:nth-of-type(3):checked ~ .rating__item:nth-of-type(-n+3),
    .rating__control:nth-of-type(4):checked ~ .rating__item:nth-of-type(-n+4),
    .rating__control:nth-of-type(5):checked ~ .rating__item:nth-of-type(-n+5){
        color: var(--uiRatingColorActive);
    }

    .rating__item:hover ~ .rating__item{
        color: var(--uiRatingColor);
    }

    /*
    =====
    LEVEL 2. SETTINGS
    =====
    */

    .rating{
        --ratingSize: 30px;
        --ratingColor: #eee;
        --ratingColorActive: #ffcc00;
    }
</style>
