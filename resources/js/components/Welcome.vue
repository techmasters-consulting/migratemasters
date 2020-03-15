<template>
    <div>


        <div class="row px-5">
            <div class="col-lg-8 col-md-8 column-xl-9 ">
                <h2 class="heading">My Profile</h2>
                <div class="tabs-holder">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="study-tab" data-toggle="tab" href="#study" role="tab" aria-controls="study" aria-selected="false">Education History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="false">Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="relocate-tab" data-toggle="tab" href="#relocate" role="tab" aria-controls="relocate" aria-selected="false">Background Info</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">





                            <form enctype="multipart/form-data">

                                <div class="profile">
                                    <div class="prof-pic">
                                        <div class="img-wrap">
                                            <img :src="getProfilePhoto()" id="previewHolder">
                                            <span class="camera pouter"><span class="pinner"><label for="filePhoto" style="cursor: pointer; color: white;"><i class="fa fa-camera" aria-hidden="true"></i></label></span></span>  <input type="file" @change="updateProfile" accept="image/*" name="filePhoto" value="" id="filePhoto" style="display: none">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">First Name as shown on passport</label>

                                            <input v-model="form.fname" type="text" id="fname" name="fname"
                                                   placeholder="Name"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('fname') }">
                                            <has-error :form="form" field="first name"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name as shown on passport</label>

                                            <input v-model="form.lname" type="text" id="lname" name="lname"
                                                   placeholder="Last Name"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('lname') }">
                                            <has-error :form="form" field="lname"></has-error>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mname">Middle Name as shown on passport</label>

                                            <input v-model="form.mname" type="text" id="mname" name="mname"
                                                   placeholder="Middle Name"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('mname') }">
                                            <has-error :form="form" field="mname"></has-error>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oname">Other Name If Any</label>

                                            <input v-model="form.oname" type="text" id="oname" name="oname"
                                                   placeholder="Other Name"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('oname') }">
                                            <has-error :form="form" field="oname"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="haddress">Home Address</label>

                                            <input v-model="form.haddress" type="text" id="haddress" name="haddress"
                                                   placeholder="Home Address"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('haddress') }">
                                            <has-error :form="form" field="haddress"></has-error>
                                        </div>

                                    </div>   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>

                                        <input v-model="form.city" type="text" id="city" name="haddress"
                                               placeholder="City"
                                               class="form-control" :class="{ 'is-invalid': form.errors.has('city') }">
                                        <has-error :form="form" field="city"></has-error>
                                    </div>

                                </div>






                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select v-model="form.country"  id="country"  name="country" class="form-control" :class="{ 'is-invalid': form.errors.has('country') }">

                                                <option value="">Country of Origin</option>
                                                <option v-for="country in countries" :key="country.id" :value="country.name">{{country.name}}</option>

                                            </select>
                                            <has-error :form="form" field="country"></has-error>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input v-model="form.state" class="custom-select" type="text" name="state" id="state" :class="{ 'is-invalid': form.errors.has('state') }">

                                            <has-error :form="form" field="state"></has-error>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Age</label>

                                            <input v-model="form.age" type="text" id="age" name="age"
                                                   placeholder="Age"
                                                   class="form-control" :class="{ 'is-invalid': form.errors.has('age') }">
                                            <has-error :form="form" field="age"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>date of Birth</label>
                                        <input v-model="form.dob" type="date"  name="dob"
                                               placeholder="date of date"
                                               class="form-control" :class="{ 'is-invalid': form.errors.has('dob') }">
                                        <has-error :form="form" field="dob"></has-error>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cob">Country of Birth</label>
                                            <select class="custom-select" id="cob" v-model="form.cob" name="cob" :class="{ 'is-invalid': form.errors.has('state') }">
                                                <option value="">Where were you born</option>
                                                <option v-for="country in countries" :key="country.id" :value="country.name">{{country.name}}</option>

                                            </select>
                                            <has-error :form="form" field="cob"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <div class="checkbox_small">
                                            <div class="check-inner">
                                                <input type="radio" id="male" value="male" v-model="form.gender" name="gender" checked :class="{ 'is-invalid': form.errors.has('gender') }">
                                                <label for="male">Male</label>
                                            </div>

                                            <div class="check-inner">
                                                <input type="radio" id="female" value="female" v-model="form.gender" name="gender" :class="{ 'is-invalid': form.errors.has('gender') }">
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                        <has-error :form="form" field="gender"></has-error>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nationality">Nationality</label>

                                            <select class="custom-select" id="nationality"  v-model="form.nationality" name="nationality" :class="{ 'is-invalid': form.errors.has('nationality') }">
                                                <option value="">Nationality</option>
                                                <option v-for="country in countries" :key="country.id" :value="country.name">{{country.name}}</option>

                                            </select><has-error :form="form" field="nationality"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label for="citizenship"> Other Citizenship</label>

                                        <select class="custom-select" id="citizenship" v-model="form.citizenship" name="citizenship" :class="{ 'is-invalid': form.errors.has('citizenship') }">
                                            <option value="not applicable">In case of dual Citizen ship</option>
                                            <option v-for="country in countries" :key="country.id" :value="country.name">{{country.name}}</option>
                                        </select> <has-error :form="form" field="citizenship"></has-error>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="expiry">Passport Expiry Date</label>
                                            <input type="date" name="expiry" placeholder="When does Your Passport Expire" v-model="form.expiry" class="form-control" id="expiry" :class="{ 'is-invalid': form.errors.has('expiry') }">
                                            <has-error :form="form" field="expiry"></has-error>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <label>Previously Divorced?</label>

                                        <div class="checkbox_small">
                                            <div class="check-inner">
                                                <input type="radio" id="yes" value="yes" v-model="form.pdivorced" name="pdivorced" checked >
                                                <label for="yes">Yes</label>
                                            </div>

                                            <div class="check-inner">
                                                <input type="radio" id="no" value="no" v-model="form.pdivorced" name="pdivorced">
                                                <label for="no">No</label>
                                            </div>
                                            <has-error :form="form" field="pdivorced"></has-error>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Marital Status</label>

                                            <div class="checkbox_small">
                                                <div class="check-inner">
                                                    <input type="radio" id="single" value="Single" v-model="form.mstatus" name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }" checked>
                                                    <label for="single">Single</label>
                                                </div>

                                                <div class="check-inner">
                                                    <input type="radio" id="married" value="Married" v-model="form.mstatus" name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }">
                                                    <label for="married">Married</label>
                                                </div>
                                                <div class="check-inner">
                                                    <input type="radio" id="common_law" value="Common Law" v-model="form.mstatus" name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }" checked>
                                                    <label for="common_law">Common Law</label>
                                                </div>

                                                <div class="check-inner">
                                                    <input type="radio" id="separated" value="Separated" v-model="form.mstatus" name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }">
                                                    <label for="separated">Separated</label>
                                                </div>
                                                <div class="check-inner">
                                                    <input type="radio" id="divorced" value="Divorced" v-model="form.mstatus" name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }" checked>
                                                    <label for="divorced">Divorced</label>
                                                </div>

                                                <div class="check-inner">
                                                    <input type="radio" id="widowed" value="Widowed" v-model="form.mstatus"  name="mstatus" :class="{ 'is-invalid': form.errors.has('mstatus') }">
                                                    <label for="widowed">Widowed</label>
                                                </div>
                                            </div>  <has-error :form="form" field="mstatus"></has-error>
                                        </div>

                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nlanguage">Native Language</label>
                                            <input type="text" name="nlanguage" placeholder="e.g Mauritian Creole"  v-model="form.nlanguage" class="form-control" id="nlanguage" :class="{ 'is-invalid': form.errors.has('nlanguage') }">
                                            <has-error :form="form" field="nlanguage"></has-error>   </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Language Spoken</label>

                                        <div class="checkbox_small">
                                            <div class="check-inner">
                                                <input type="radio" id="french" value="french" v-model="form.language" name="language" :class="{ 'is-invalid': form.errors.has('language') }" checked>
                                                <label for="french">French</label>
                                            </div>

                                            <div class="check-inner">
                                                <input type="radio" id="english" value="english" v-model="form.language" name="language" :class="{ 'is-invalid': form.errors.has('language') }">
                                                <label for="english">English</label>
                                            </div>
                                        </div>
                                        <has-error :form="form" field="language"></has-error>
                                    </div>



                                </div>

                                <div class="btn-con">
                                    <button class="btn " v-show="exist" @click.prevent="onSubmit" type="submit">Update</button>
                                    <button class="btn " v-show="!exist" @click.prevent="onSubmit" type="submit">Submit</button>
                                </div>
                            </form>



                        </div>
                        <div class="tab-pane fade " id="study" role="tabpanel" aria-labelledby="study-tab">



                            <study-goals-form></study-goals-form>


                        </div>
                        <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">

                            <work-goals-form></work-goals-form>



                        </div>
                        <div class="tab-pane fade" id="relocate" role="tabpanel" aria-labelledby="relocate-tab">
                            <background-info></background-info>


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 column-xl-3">


                <div class="right-container style2">

                    <!--                <div class="inner">-->
                    <!--                    <strong class="heading d-block mb-2 pb-0">Important Factors To consider</strong>-->
                    <!--                    <span class="sub-title d-block">RE-ARRANGE CARDS IN ORDER OF IMPORTANCE.</span>-->




                    <!--                    <task-draggable></task-draggable>-->


                    <!--                </div>-->

                    <div class="inner">
                        <fin-plan-form></fin-plan-form>

                    </div>
                    <div class="inner">
                        <dependants-form></dependants-form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    export default {

        data() {
            return {
                users: {},
                exist: [],
                currentPhoto : "",
                countries: [],
                form: new Form({
                    filePhoto: '',
                    fname : '',
                    mname : '',
                    lname : '',
                    oname : '',
                    haddress : '',
                    city : '',
                    country : '',
                    state : '',
                    age : '',
                    dob : '',
                    cob : '',
                    gender : '',
                    nationality : '',
                    citizenship : '',
                    expiry : '',
                    pdivorced : '',
                    mstatus : '',
                    nlanguage : '',
                    language : '',


                })

            }
        },

        methods: {
            updateProfile(e){
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onloadend = (file) => {
                    this.form.filePhoto = reader.result;
                }
                reader.readAsDataURL(file);
            }
            ,
            onSubmit(){
                this.$Progress.start();
                this.form.post('/userProfileUpdate')
                    .then(()=>{
                        Fire.$emit('AfterCreate');



                        this.$Progress.finish();
                    })
                    .catch(()=>{
                        // this.$Progress.fail();
                        Toast.fire({
                            icon: 'success',
                            title: 'Signed in successfully'
                        })
                        toast({
                            type: 'Error',
                            title: 'The given data was invalid.'
                        })
                    })
            },
            loadUser(){
                this.$Progress.start();

                axios.get("/userProfileGet").then(({ data }) => (this.form.fill(data)));
                this.$Progress.finish();
            },
            loadCountries(){
                axios.get("/countries").then(({ data }) => (this.countries = data));

            },
            checkUserExisted(){
                axios.get("/checkuser").then(({ data }) => (this.exist = data));
            },
            getProfilePhoto(){
                let prefix = (this.form.filePhoto.match(/\//) ? '' : '/images/');
                return prefix + this.form.filePhoto;
            },

        },

        mounted() {
            this.checkUserExisted();
            this.loadCountries();
            this.loadUser();
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#previewHolder').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#filePhoto").change(function() {
                readURL(this);
            });
        },

    }





</script>

<style scoped>

    .profile{
        padding-bottom: 50px;
    }
    .prof-pic{
        position: relative;
        width: 225px;
        height: 225px;
        margin: 0 auto;
    }
    .img-wrap{
        width: 225px;
        height: 225px;
        border: 10px solid rgb(176, 165, 189);
        border-radius: 50%;
        overflow: hidden;
    }
    .prof-pic img{
        width: 100%;
        height: auto;
        display: block;
    }
    .pouter{
        width: 65px;
        height: 65px;
        background-color: rgba(176, 165, 189, .7);
        border-radius: 50%;
    }
    .pinner{
        width: 53px;
        height: 53px;
        display: block;
        background-color: #efefef;
        border-radius: 50%;
        text-align: center;
        margin: 6px auto 0px;
    }
    .camera{
        position: absolute;
        top: -6px;
        left: 0;
    }
    .write{
        position: absolute;
        bottom: 7px;
        right: 0;
    }
    .fa.fa-camera, .fa.fa-pencil{
        color: #5a4276;
        font-size: 25px;
        line-height: 53px;
    }

</style>
