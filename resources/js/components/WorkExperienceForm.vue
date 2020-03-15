<template>
<div id="page">
    <h2>Work Experience (up to the last 10 years)</h2>
    <div v-if="items" class="table col-md-12">
        <table class="rank-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job Title</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <tr  :key="item.id" v-for="item in items " >
                <td>{{item.id}}</td>
                <td>{{item.company | upText}}</td>
                <td>{{item.job_title}}</td>
                <td>{{item.job_period_start | myDate}}</td>
                <td>{{item.job_period_end | myDate}}</td>
                <td> <a href="#" @click="deleteWork(item.id)">
                    <i class="fa fa-trash red"></i>
                </a> </td>
            </tr>

            </tbody>
        </table>
    </div>

    <form @submit.prevent="createExp">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="company">Company</label>
            <input id="company" name="company" v-model="form.company" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius" :class="{ 'is-invalid': form.errors.has('company') }">
            <has-error :form="form" field="company"></has-error>



        </div>
        <div class="form-group col-md-6">
            <label for="jobtitle">Job Title</label>
            <input id="jobtitle" name="jobtitle" v-model="form.jobtitle" class="form-control" type="text" placeholder="e.g.School Teacher" :class="{ 'is-invalid': form.errors.has('jobtitle') }">

            <has-error :form="form" field="jobtitle"></has-error>

        </div>
        <div class="form-group col-md-6">
            <label for="startdate">from</label>
            <input type="date" name="startdate" placeholder="Starting Date?" v-model="form.startdate" class="form-control" id="startdate" :class="{ 'is-invalid': form.errors.has('startdate') }">
            <has-error :form="form" field="startdate"></has-error>

        </div>
        <div class="form-group col-md-6">
            <label for="enddate">To </label>
            <input type="date" name="enddate" placeholder="Finishing Date?" v-model="form.enddate" class="form-control" id="enddate" :class="{ 'is-invalid': form.errors.has('enddate') }">
            <has-error :form="form" field="enddate"></has-error>

        </div>
    </div>

    <div class="form-group col-md-6">

    </div>
    <div class="btn-container">
        <button class="btn   btn-block btn-sm"  type="submit" >Save and Add More</button>
    </div>
    </form>


<!--    <WorkGoalsForm></WorkGoalsForm>-->
</div>
</template>

<script>

    export default {
        name: "WorkExperienceForm",
        data(){
            return{
                items: [],
                form: new Form({
                    company: '',
                    jobtitle: '',
                    startdate: '',
                    enddate: '',
                }),


            }
        },
        methods: {
            createExp() {

                this.form.post('/store-work-exp')
                    .then(() => {


                        Fire.$emit('AfterCreate');
                        flash('Your Work Experience has been recorded.', 'success');
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
            getWork() {
                axios.get('/get-work-exp').then(({data}) => {

                    //console.log(response.data)
                    this.items = data;



                });
            },

            deleteWork(id){

                // Send request to the server

                this.form.delete('/delete-work/'+id).then(()=>{

                    Fire.$emit('AfterCreate');



                }).catch(()=> {
                    swal("Failed!", "There was something wrong.", "warning");
                });


            },
        },
        created() {
            this.getWork();
            Fire.$on('AfterCreate',() => {
                this.getWork();
            });
        },
    }
</script>

<style scoped>

</style>
