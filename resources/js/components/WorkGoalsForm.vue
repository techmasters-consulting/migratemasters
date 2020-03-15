
<template>
    <div>
    <form class="interest-form"  @submit.prevent="onSubmit">

        <h2>My Goals</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gotjob">Have you gotten a job yet?</label>
                <select v-model="form.gotjob" class="custom-select"id="gotjob" :class="{ 'is-invalid': form.errors.has('gotjob') }">
                    <option selected>Please select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>

                </select>
                <has-error :form="form" field="gotjob"></has-error>
            </div>
            <div class="form-group col-md-6">
                <label for="company">Which company?</label>
                <input id="company" name="company" v-model="form.company" class="form-control" type="text" placeholder="e.g.IBM Canada" :class="{ 'is-invalid': form.errors.has('company') }">
                <has-error :form="form" field="company"></has-error>
            </div>

        </div>
        <div class="form-row mb-5">
            <div class="form-group mb-md-0 col-md-6">
                <label for="jobtitle">What career path are you thnking of going into?</label>
                <input id="jobtitle" name="jobtitle" v-model="form.jobtitle" class="form-control" type="text" placeholder="jobtitle" :class="{ 'is-invalid': form.errors.has('jobtitle') }">
                <has-error :form="form" field="jobtitle"></has-error>
            </div>
            <div class="form-group mb-0 col-md-6">

                <div class="form-group">
                    <label for="professional_certifications">What is your professional certification</label>
                    <input type="text" name="professional_certifications" placeholder="What is your professional certification?" v-model="form.professional_certifications" class="form-control" id="professional_certifications" :class="{ 'is-invalid': form.errors.has('professional_certifications') }">
                    <has-error :form="form" field="professional_certifications"></has-error>
                </div>

            </div>
            <div class="form-group mb-0 col-md-12">
            <div class="form-group">
                <label for="skill_sets">Skill sets</label>
                <input type="text" name="skill_sets" placeholder="What is your skill sets?" v-model="form.skill_sets" class="form-control" id="skill_sets" :class="{ 'is-invalid': form.errors.has('skill_sets') }">
                <has-error :form="form" field="skill_sets"></has-error>

            </div>
        </div>

        </div>
        <div class="text-right mt-4">
            <button  class="button btn" type="submit">Save</button>
        </div>
    </form>
<work-experience-form></work-experience-form>
    </div>
</template>

<script>
                import WorkExperienceForm from "./WorkExperienceForm";


            export default {
                components: {WorkExperienceForm},
                //props: ['study_goals'],
                data() {

                    return {

                        form: new Form({
                            company: '',
                            gotjob: '',
                            jobtitle: '',
                            professional_certifications: '',
                            skill_sets: '',
                        }),



                    }
                },
                methods: {
                    onSubmit() {

                        this.form.post('/store-work')
                            .then(() => {
                                Fire.$emit('AfterCreate')
                                flash('Your working abroad goals has been updated.', 'success');
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
                    getWorkGoal() {
                        axios.get('/get-work').then(({data}) => {

                            this.form.company = data.company;
                            this.form.gotjob = data.gotjob;
                            this.form.professional_certifications = data.professional_certifications;
                            this.form.skill_sets = data.skill_sets;
                            this.form.jobtitle = data.jobtitle;


                        }).catch(error => error.response.data.errors);
                    },
                },
                created() {
                    this.getWorkGoal();

                    Fire.$on('AfterCreate',() =>{
                        this.getWorkGoal();
                    });
                },
            }




</script>



