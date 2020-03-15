<template>
<section>
    <strong class="heading d-block">Dependants</strong>
    <div v-if="items" class="table col-md-12">
        <table class="rank-table">
            <thead>
            <tr>
<!--                <th>#</th>-->
                <th>Name</th>
                <th>relationship</th>

                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <tr  :key="item.id" v-for="item in items " >
<!--                <td>{{item.id}}</td>-->
                <td>{{item.name | upText}}</td>
                <td>{{item.relationship | upText}}</td>

                <td>  <a href="#" @click="deleteDependent(item.id)">
                    <i class="fa fa-trash red"></i>
                </a></td>
            </tr>

            </tbody>
        </table>
    </div>

    <form class="interest-form"  @submit.prevent="onSubmit" >
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="form.name" name="name"  id="name" class="form-control" type="text" placeholder="Enter dependant Name" :class="{ 'is-invalid': form.errors.has('name') }">
            <has-error :form="form" field="name"></has-error>
        </div>
        <div class="form-group">
            <label for="relationship">Relationship</label>
            <select v-model="form.relationship"  name="relationship" class="custom-select" id="relationship" :class="{ 'is-invalid': form.errors.has('relationship') }">
                <option selected>Please select one</option>
                <option value="child">Child</option>
                <option value="parent">Parent</option>
                <option value="Other">Other</option>

            </select>
            <has-error :form="form" field="relationship"></has-error>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input v-model="form.age" name="age"  id="age" class="form-control" type="text" placeholder="Enter dependant age" :class="{ 'is-invalid': form.errors.has('age') }">
            <has-error :form="form" field="age"></has-error>
        </div>
        <div class="btn-container">
            <button class="btn  btn-block btn-sm" type="submit" >Save and Add More</button>
        </div>
    </form>
</section>

</template>

<script>

    export default {
        //props: ['study_goals'],
        data() {

            return {
                items:{},
                form: new Form({
                    name:'',
                    relationship:'',
                    age:'',
                }),



            }
        },
        methods: {


            deleteDependent(id){

                    // Send request to the server

                        this.form.delete('/delete-dependent/'+id).then(()=>{

                            Fire.$emit('AfterCreate');



                        }).catch(()=> {
                            swal("Failed!", "There was something wronge.", "warning");
                        });


            },
            onSubmit() {

                this.form.post('/store-dependant')
                    .then(() => {

                        flash('Your Dependent has been updated.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });

                        Fire.$emit('AfterCreate');
                    }).catch(() => {

                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },
            getDependent() {
                axios.get('/get-dependent').then(({data}) => {
                        this.items = data;

                });
            },
        },
        created() {
            this.getDependent();
            Fire.$on('AfterCreate',() => {
                this.getDependent();
            });

            // setInterval(() => this.getDependent(), 3000);
        },
    }




</script>


