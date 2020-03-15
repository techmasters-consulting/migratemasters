<template>
    <div>
        <form class="interest-form"  @submit.prevent="onSubmit">

            <h2>What is your current study goal?</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gotoffer">Have you got an offer of admission ?</label>
                    <select v-model="form.gotoffer" name ="gotoffer"  class="custom-select" id="gotoffer" :class="{ 'is-invalid': form.errors.has('gotoffer') }">
                        <option selected>Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                    </select>
                    <has-error :form="form" field="gotoffer"></has-error>

                </div>
                <div class="form-group col-md-6">
                    <label for="school">Which school</label>
                    <input v-model="form.school" name="school" id="school"  class="form-control" type="text" placeholder="School Name" :class="{ 'is-invalid': form.errors.has('school') }" >
                    <has-error :form="form" field="school"></has-error>

                </div>

            </div>
            <div class="form-row mb-5">
                <div class="form-group mb-md-0 col-md-6">
                    <label for="course">Which course</label>
                    <input v-model="form.course" name="course" id="course"  class="form-control" type="text" placeholder="course or discipline" :class="{ 'is-invalid': form.errors.has('course') }">
                    <has-error :form="form" field="course"></has-error>

                </div>

                <div class="form-group mb-0 col-md-6">

                    <div class="form-group">
                        <label for="startingdate">Starting Date</label>
                        <input type="date" name="startingdate" placeholder="When are you starting?" v-model="form.startingdate" class="form-control" id="startingdate" :class="{ 'is-invalid': form.errors.has('startingdate') }">
                        <has-error :form="form" field="startingdate"></has-error>

                    </div>

                </div>
            </div>

            <h2>Have you taken any of the following tests?</h2>

            <span class="sub-title">A. English proficiency test</span>
            <has-error :form="form" field="language"></has-error>

            <ul class="radios-holder">
                <li>
                    <div class="checkbox-radio">
                        <input  v-model="form.language" value="ietls" type="checkbox" id="ielts" :class="{ 'is-invalid': form.errors.has('language') }">
                        <label for="ielts">IELTS</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input  v-model="form.language" value="toefl"  type="checkbox" id="toefl" :class="{ 'is-invalid': form.errors.has('language') }">
                        <label for="toefl">TOEFL</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input  v-model="form.language" value="toeic" type="checkbox" id="toeic" :class="{ 'is-invalid': form.errors.has('language') }">
                        <label for="toeic">TOEIC</label>
                    </div>
                </li>

            </ul>

            <span class="sub-title">B. Undergraduate Admissions Test</span>
            <ul class="adm-test">
                <li>
                    <div class="checkbox-radio">
                        <input name="language" v-model="form.undergraduate" value="umat" type="checkbox" id="test1" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test1">UMAT - Undergraduate Medical Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input v-model="form.undergraduate" value="gedh" type="checkbox" id="test2" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test2">GED - High School Diploma Equivalent</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input v-model="form.undergraduate" value="ukcat" type="checkbox" id="test3" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test3">UKCAT - United Kingdom Clinical Aptitude Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input v-model="form.undergraduate" value="gceal" type="checkbox" id="test4" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test4">GCE/A Level - General Certificate of Education</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input v-model="form.undergraduate" value="sat" type="checkbox" id="test5" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test5">SAT - Scholastic Assessment Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.undergraduate" value="act" id="test6" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test6">ACT - Formerly American College TEsting Program or American College Test </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.undergraduate" value="ged" id="test7" :class="{ 'is-invalid': form.errors.has('undergraduate') }">
                        <label for="test7">GED - General Equivalency Diploma</label>
                    </div>
                </li>
            </ul>

            <span class="sub-title">C. Postgraduate / Professional Admission Tests</span>
            <has-error :form="form" field="postgraduate"></has-error>

            <ul class="adm-test pb-5">
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="gamsat" id="test8" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test8">GAMSAT - Graduate Medical Schools Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="lsat" id="test9" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test9">LSAT - Law School Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="mat" id="test10" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test10">MAT - Miller Analogies Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="gre" id="test11" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test11">GRE - Graduate Record Examination</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="gmat" id="test12" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test12">GMAT -  Graduate Management Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="mcat" id="test13" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test13">MCAT - Medical College Admission Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="dat" id="test14" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test14">DAT - Dental Aptitude Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="oat" id="test15" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test15">OAT - Optometry Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="pcat" id="test16" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test16">PCAT - Pharmacy College Admission Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="teas" id="test17" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test17">TEAS - Test of Essential Academic Skills</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="ahpat" id="test18" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test18">AHPAT - Allied Health Professions Admissions Test</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-radio">
                        <input type="checkbox" v-model="form.postgraduate" value="lsatlaw" id="test19" :class="{ 'is-invalid': form.errors.has('postgraduate') }">
                        <label for="test19">LSAT - Law School Admissions Test</label>
                    </div>
                </li>
            </ul>



            <div class="text-right mt-4">
                <button  class="button btn" type="submit" >Save</button>
            </div>
        </form>
        <education-history-form></education-history-form>
    </div>
</template>

<script>


    export default {
        // components: {EducationHistoryForm},
        //props: ['study_goals'],
        data() {

            return {
                form: new Form({
                    school: '',
                    startingdate: '',
                    gotoffer: '',
                    course: '',
                    undergraduate: [],
                    language: [],
                    postgraduate: [],
                }),




            }
        },
        methods: {
            onSubmit() {

                this.form.post('/store-study')
                    .then(() => {

                        flash('Your study goals has been updated.', 'success');
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
            getStudyGoal() {
                axios.get('/get-study').then(({data}) => {


                    this.form.startingdate = data.startingdate;
                    this.form.gotoffer = data.gotoffer;
                    this.form.study = data.study;
                    this.form.course = data.course;
                    this.form.destination = data.destination;
                    this.form.school = data.school;

                    this.form.undergraduate = data.undergraduate;
                    this.form.language = data.language.split(',');
                    this.form.undergraduate = data.undergraduate.split(',');
                    this.form.postgraduate = data.postgraduate.split(',');
                   // console.log(this.form.undergraduate[0]);
                });
            },
        },
        created() {
            this.getStudyGoal();
        },
    }




</script>


