<template>

                <div class="progress-area">
                    <div v-for="score in scores" :key="score.index">
                    <span class="title" v-text="score.sliderTitle + ': ' + score.sliderValueNew"></span>

                                        <input class="score-range" @input="updateItemValue($event.target.value)" type="text" min="3" max="9" :value="score.sliderValueNew" name="points" step="0.5">
                                        <ul class="score-values">
                                            <li>3.0</li>
                                            <li>9.0</li>
                                        </ul>
                    </div>
<!--                    <range-slider-->
<!--                        class="slider"-->
<!--                        :sliderTitleNew="sliderTitleNew"-->
<!--                        min="3"-->
<!--                        max="9"-->
<!--                        step="0.5"-->
<!--                        v-model="sliderValue" >-->




<!--                    </range-slider>-->
    </div>

<!--    <div class="accord-inner">-->
<!--        <h2 class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">-->
<!--            <span>Target Score: 9.0</span>-->
<!--            <i class="fa fa-plus"></i>-->
<!--            <i class="fa fa-minus"></i>-->
<!--        </h2>-->

<!--        <div id="collapseTwo" class="collapse" data-parent="#accordionOne">-->
<!--            <div class="collapse-holder">-->
<!--                <div class="progress-area">-->
<!--                    <span class="title">Listening: 7.5</span>-->
<!--                    <input class="score-range" type="text" min="3" max="9" value="7.5" name="points" step="0.5">-->
<!--                    <ul class="score-values">-->
<!--                        <li>3.0</li>-->
<!--                        <li>9.0</li>-->
<!--                    </ul>-->

<!--                    <span class="title">Reading: 8.5</span>-->
<!--                    <input class="score-range" type="text" min="3" max="9" value="8.5" name="points" step="0.5">-->
<!--                    <ul class="score-values">-->
<!--                        <li>3.0</li>-->
<!--                        <li>9.0</li>-->
<!--                    </ul>-->

<!--                    <span class="title">Speaking: 7.0</span>-->
<!--                    <input class="score-range" type="text" min="3" max="9" value="7" name="points" step="0.5">-->
<!--                    <ul class="score-values">-->
<!--                        <li>3.0</li>-->
<!--                        <li>9.0</li>-->
<!--                    </ul>-->

<!--                    <span class="title">Writing: 8.5</span>-->
<!--                    <input class="score-range" type="text" min="3" max="9" value="8.5" name="points" step="0.5">-->
<!--                    <ul class="score-values">-->
<!--                        <li>3.0</li>-->
<!--                        <li>9.0</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</template>

<script>
    //import RangeSlider from "./RangeSlider";
    export default {
        name: "Scores.vue",
        // components: {RangeSlider},
        //
        props: ['scores'],
        data() {
            return {

            }
        },

        methods: {
            updateItemValue(sliderValueNew) {
                console.log(sliderValueNew);
                this.$emit('input', sliderValueNew);
            },
onDere(){
                let scoreType =  this.scoreType
                let items = this.items.map(function(item, index) {
                    return { item: item, order: index }
                })
                if(this.debounce) return
                this.debounce = setTimeout(function(items, scoreType ) {
                    this.debounce = false

                    let scores = items;
                    axios.put('/scores/update' +
                        '', {
                        scores: scores,
                        scoreType: scoreType,
                    }).then((response) => {
                        flash('Your ' + scoreType + ' score has been updated', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch((error) => {
                        flash('The given data was invalid.', 'warning');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    })
                }.bind(this, items), 2000)

            }
       },
    }
</script>

<style scoped>

</style>
