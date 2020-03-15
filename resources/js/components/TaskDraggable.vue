<template>

            <section>
<!--                <draggable v-model="myArray" group="people" @start="drag=true" @end="drag=false">-->
<!--                    <div v-for="element in myArray" :key="element.id">{{element.name}}</div>-->
<!--                </draggable>--> <ul class="cards-list" >
                <draggable v-model="items"  @end="updateItemOrder"  class="drag-area draggable"  >

                        <li v-for=" item in items " :key="item.order" class="box">{{item.title}}</li>

                </draggable>
            </ul>

<!--                    <ul class="cards-list" >-->

<!--                        <li class="box">LOW TUTION FEES / COST OF LIVING</li>-->

<!--                    </ul>-->
<!--                    <ul class="cards-list" >-->

<!--                        <li class="box">LOCATION</li>-->

<!--                    </ul>-->
<!--                    <ul class="cards-list" >-->


<!--                        <li class="box">RANKING</li>-->

<!--                    </ul>-->
<!--                    <ul class="cards-list" >-->


<!--                        <li class="box">WORK OPPORTUNITY</li>-->

<!--                    </ul>-->
<!--                    <ul class="cards-list" >-->



<!--                        <li class="box">EASY TO PASS</li>-->

<!--                    </ul>-->
<!--                    <ul class="cards-list" >-->




<!--                        <li class="box">IMMIGRATION</li>-->
<!--                    </ul>-->
<!--                    <article class="card cards-list">-->
<!--                        <header class="box">LESS INTERNATIONAL STUDENTS-->

<!--                        </header>-->
<!--                    </article>-->
<!--                    <article class="card cards-list">-->
<!--                        <header class="box">LESS INTERNATIONAL1 STUDENTS-->

<!--                        </header>-->
<!--                    </article>-->
<!--                    <article class="card cards-list">-->
<!--                        <header class="box">LESS INTERNATIONAL2 STUDENTS-->

<!--                        </header>-->
<!--                    </article>-->
<!--                    <article class="card cards-list">-->
<!--                        <header class="box">LESS INTERNATIONAL STUDENTS-->

<!--                        </header>-->
<!--                    </article>-->
<!--                    <article class="card cards-list">-->
<!--                        <header class="box">LESS INTERNATIONAL STUDENTS-->

<!--                        </header>-->
<!--                    </article>-->




            </section>



</template>

<script>
    import draggable from 'vuedraggable'

    export default {
        name: "TaskDraggable",
        components: {
            draggable
        },

        data() {
            return {
                debounce: false,
                items:[
                    {'title':'LESS INTERNATIONAL STUDENTS', 'order':1},
                    {'title':'LOW TUTION FEES / COST OF LIVING', 'order':2},
                    {'title':'LOCATION', 'order':3},
                    {'title':'RANKING', 'order':4},
                    {'title':'WORK OPPORTUNITY', 'order':5},
                    {'title':'EASY TO PASS', 'order':6},
                    {'title':'IMMIGRATION', 'order':7},
                ],


            }
        },



        methods: {
            updateItemOrder() {
               // alert(items);
                // get your info then...
                var items = this.items.map(function(item, index) {
                    return { item: item, order: index }
                })

                if(this.debounce) return
                this.debounce = setTimeout(function(items) {
                    this.debounce = false

                    let tasks = items;
                    axios.put('/tasks/updateOrder' +
                        '', {
                        tasks: tasks
                    }).then((response) => {
                        flash('Your Important Factors has been prioritized', 'success');
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
            },

        onAdd(event, status) {

                alert('dragged');
                let id = event.item.getAttribute('data-id');
                axios.patch('/tasks/' + id ).then((response) => {
                    flash('Your profile has been updated.', 'success');
                }).catch((error) => {
                    console.log(error);
                })
            },
            getImportantFactors() {
                axios.get('/tasks/getUserTask').then(response => {
                    let data = response.data;
                    // this.items.title = response.data.title;
                    // this.id = response.data.order;
                    const result = data.map((item) => {
                        return {
                            title: item.title,
                            order: item.order

                        };
                    }).sort((a, b) => a.order - b.order);
                    if (result.length >0){ this.items = result};



                });
            },

        },
        created() {
            this.getImportantFactors();

        },
    }
</script>

