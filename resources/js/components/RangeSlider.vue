<template>

            <section>
                <div class="accord-inner">
                    <h2 class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span v-text="scoreType + ': ' + total"></span>
                        <!--        Previous Score:    :scoreType="scoreType"-->

<!--                        {{scores.scoreTypeNew}} : {{scores.totalNew}}-->
                        <span class="title" ></span>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                    </h2>

                    <div id="collapseOne" class="collapse" data-parent="#accordionOne">
                        <div class="collapse-holder">



 <scores :scores="scores" @input="onClickChild(input)" ></scores>

                        </div>
                    </div>
                </div>



            </section>



</template>

<script>

   // import scores from "./Scores.vue";
    export default {
        name: "RangeSlider",
        //components: {scores},

        props: ['score-type'],

        data() {

            return {
                debounce: false,
               // scoreTypeNew: this.scoreType,
                scores:[


                    {'sliderValueNew': '7.5', 'sliderTitle': 'Listening'},
                    {'sliderValueNew': '6.0', 'sliderTitle': 'Reading'},
                    {'sliderValueNew': '8.5', 'sliderTitle': 'Speaking'},
                    {'sliderValueNew': '7.5', 'sliderTitle': 'Writing'},


                ],



                        total: '7.5',

                    }


            },


        methods: {
            onClickChild (value) {
                console.log("is"+value) ;// someValue
            },
            // updateItemValue() {
            //     if(this.debounce) return
            //     this.debounce = setTimeout(function(items) {
            //         this.debounce = false
            //
            //         let tasks = items;
            //         axios.put('/scores/update' +
            //             '', {
            //             tasks: tasks
            //         }).then((response) => {
            //             flash('Your score has been updated', 'success');
            //             window.scroll({
            //                 top: 0,
            //                 left: 0,
            //                 behavior: 'smooth'
            //             });
            //         }).catch((error) => {
            //             flash('The given data was invalid.', 'warning');
            //             window.scroll({
            //                 top: 0,
            //                 left: 0,
            //                 behavior: 'smooth'
            //             });
            //         })
            //     }.bind(this, items), 2000)
            // },
            //
            //
            // getScores() {
            //     axios.get('/tasks/getUserScores').then(response => {
            //         let data = response.data;
            //         // this.items.title = response.data.title;
            //         // this.id = response.data.order;
            //         const result = data.map((item) => {
            //             return {
            //                 preading: item.preading,
            //                 plistening: item.plistening,
            //                 pspeaking: item.pspeaking,
            //                 pwriting: item.pwriting,
            //                 preading: item.preading,
            //                 plistening: item.plistening,
            //                 pspeaking: item.pspeaking,
            //                 pwriting: item.pwriting,
            //
            //
            //             };
            //         });
            //         console.log(result);
            //         if (result){ this.items = result};
            //
            //
            //
            //     });
            // },

        },
        // created() {
        //     //this.getScores();
        //
        // },
    }
</script>

