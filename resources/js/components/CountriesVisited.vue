<template>
    <section>
        <h2 class="heading d-block">Countries Visited</h2>
        <div v-if="items" class="table col-md-12">
            <table class="rank-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Country</th>
                    <th>Year</th>
                    <th>Duration</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr  :key="item.id" v-for="item in items " >
                    <td>{{item.id}}</td>
                    <td>{{item.country}}</td>
                    <td>{{item.year}}</td>
                    <td>{{item.duration}}</td>

                    <td> <a href="#" @click="deleteCountries(item.id)">
                        <i class="fa fa-trash red"></i>
                    </a></td>
                </tr>

                </tbody>
            </table>
        </div>
        <form class="interest-form"  @submit.prevent="onSubmit" >

           <div class="form-row">
            <div class="form-group col-md-4">
                <label for="country">Country </label>
                <select class="custom-select" id="country" v-model="form.country" name="country">
                    <option value="">Please Choose one</option>
                    <option v-for="country in countries" :key="country.id" :value="country.name">{{country.name}}</option>

                </select>
                <has-error :form="form" field="country"></has-error>


            </div>
            <div class="form-group col-md-4">
                <label for="year">Year</label>

                <input v-model="form.year" name="year"  id="year" class="form-control" type="text" placeholder="Enter Year" :class="{ 'is-invalid': form.errors.has('year') }">


                <has-error :form="form" field="year"></has-error>

            </div>
            <div class="form-group col-md-4">
                <label for="duration">Duration</label>
                <input v-model="form.duration" name="duration"  id="duration" class="form-control" type="text" placeholder="e.g 5 weeks" :class="{ 'is-invalid': form.errors.has('duration') }">
                <has-error :form="form" field="duration"></has-error>

            </div>
           </div>
            <div class="btn-container">
                <button class="btn  btn-block btn-sm" type="submit" >Save and Add More</button>
            </div>

        </form>
    </section>
</template>

<script>

    export default {
        name: 'CountriesVisited',
        data() {
            return{
                items:{},
                countries:[],
                form: new Form({
                    country:'',
                    year:'',
                    duration:'',
                })
            }
        },
        methods: {
            onSubmit() {

                this.form.post('/store-countries-visited')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        flash('you have added a new country visited.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch(error => {

                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },

            deleteCountries(id){

                    // Send request to the server

                        this.form.delete('/delete-countries-visited/'+id).then(()=>{

                            Fire.$emit('AfterCreate');
                        }).catch(()=> {
                            Swal("Failed!", "There was something wrong.", "warning");
                        });

            },
            loadCountries(){
                axios.get("/countries").then(({ data }) => (this.countries = data));

            },
            getCountries() {
                axios.get('/get-countries-visited').then(({data}) => {

                this.items = data;
                }).catch((e)=>{
                    console.log(e);
                });
            },
        },
        created() {
            this.loadCountries();
            this.getCountries();

            Fire.$on('AfterCreate',()=>{
                this.loadCountries();
                this.getCountries();
            })
        },
    }
</script>

<style scoped>

</style>
