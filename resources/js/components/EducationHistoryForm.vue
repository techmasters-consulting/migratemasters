<template>
<div>
    <h2>Education History</h2>

    <div  class="table col-md-12">
        <table class="rank-table">
            <thead>
            <tr>
                <th>#</th>
                <th>institution</th>
                <th>Qualification</th>
                <th>Discipline</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <tr  :key="item.id" v-for="item in items" >
                <td>{{item.id}}</td>
                <td>{{item.institution}}</td>
                <td>{{item.qualification}}</td>
                <td>{{item.discipline}}</td>
                <td>{{item.starting_date | myDate}}</td>
                <td>{{item.ending_date | myDate}}</td>
                <td> <a href="#" @click="deleteEducation(item.id)">
                    <i class="fa fa-trash red"></i>
                </a></td>
            </tr>

            </tbody>
        </table>
    </div>


    <form  @submit.prevent="onSubmit">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="institution">institution?</label>
                <input id="institution" name="institution" v-model="form.institution" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius" :class="{ 'is-invalid': form.errors.has('institution') }">
                <has-error :form="form" field="institution"></has-error>
            </div>
            <div class="form-group col-md-6">
                <label for="qualification">Qualification</label>
                <input id="qualification" name="qualification" v-model="form.qualification" class="form-control" type="text" placeholder="Example: Bachealor Degree" :class="{ 'is-invalid': form.errors.has('qualification') }">
                <has-error :form="form" field="qualification"></has-error>
            </div>

        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="discipline">Discipline</label>
                <input id="discipline" name="discipline" v-model="form.discipline" class="form-control" type="text" placeholder="Enter Discipline" :class="{ 'is-invalid': form.errors.has('discipline') }">
                <has-error :form="form" field="discipline"></has-error>
            </div>

            <div class="form-group col-md-3 ">
                <label for="startdate">from</label>
                <input type="date" name="starting_date" placeholder="Starting Date?" v-model="form.starting_date" class="form-control" id="startdate" :class="{ 'is-invalid': form.errors.has('starting_date') }">
                <has-error :form="form" field="starting_date"></has-error>
            </div>
            <div class="form-group col-md-3 ">
                <label for="ending_date">To </label>
                <input type="date" name="ending_date" placeholder="Finishing Date?" v-model="form.ending_date" class="form-control" id="ending_date" :class="{ 'is-invalid': form.errors.has('ending_date') }">
                <has-error :form="form" field="ending_date"></has-error>
            </div>
        </div>


        <div class="btn-container">
            <button class="btn  btn-block btn-sm" type="submit" >Save and Add More</button>
        </div>


    </form>

</div>
</template>

<script>

    export default {

        data(){
            return{
                items:{},

                form: new Form({
                    institution: '',
                    qualification: '',
                    discipline: '',
                    starting_date: '',
                    ending_date: '',
                }),


            }
        },
        methods: {

            deleteEducation(id){

                this.form.delete('/delete-education/'+id).then(()=>{

                    Fire.$emit('AfterCreate');



                }).catch(()=> {
                    swal("Failed!", "There was something wrong.", "warning");
                });


            },
            onSubmit() {

                this.form.post('/store-edu')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        flash('Your Education History has been recorded.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch(() => {

                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },
            getEdu() {
                axios.get('/get-edu').then(({data}) => {

                    this.items = data;
               //     console.log(data);
                });
            },
        },
        created() {
            this.getEdu();
            Fire.$on('AfterCreate',() => {
                this.getEdu();
            });
        },
    }
</script>

<style scoped>

</style>
