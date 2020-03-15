
<template>
    <div>
    <form class="interest-form"  @submit.prevent="onSubmit">

        <h2>Medical Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="familytuberculosis">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="form.familytuberculosis" class="custom-select" name="familytuberculosis" id="familytuberculosis" :class="{ 'is-invalid': form.errors.has('familytuberculosis') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="familytuberculosis"></has-error>
            </div>
            <div class="form-group col-md-6">
                <label for="mentaldisorder">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="form.mentaldisorder" class="custom-select" name="mentaldisorder" id="mentaldisorder"  :class="{ 'is-invalid': form.errors.has('mentaldisorder') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="mentaldisorder"></has-error>

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfomedical">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="form.moreinfomedical" class="custom-select" name="moreinfomedical" placeholder="More Info Abouth your medical Background" id="moreinfomedical" :class="{ 'is-invalid': form.errors.has('moreinfomedical') }"></textarea>
                <has-error :form="form" field="moreinfomedical"></has-error>

            </div>

        </div>


        <h2>Visa Background</h2>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="beyondvalidity">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="form.beyondvalidity" class="custom-select" name="beyondvalidity" id="beyondvalidity"  :class="{ 'is-invalid': form.errors.has('beyondvalidity') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="beyondvalidity"></has-error>

            </div>
            <div class="form-group col-md-4">
                <label for="refusedentry">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="form.refusedentry" class="custom-select" name="refusedentry" id="refusedentry"  :class="{ 'is-invalid': form.errors.has('refusedentry') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="refusedentry"></has-error>

            </div>
            <div class="form-group col-md-4">
                <label for="previousapplication">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="form.previousapplication" class="custom-select" name="previousapplication" id="previousapplication"  :class="{ 'is-invalid': form.errors.has('previousapplication') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>

                </select>
                <has-error :form="form" field="previousapplication"></has-error>

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfovisa">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="form.moreinfovisa" class="custom-select" name="moreinfovisa" placeholder="More Info About your visa Background" id="moreinfovisa" :class="{ 'is-invalid': form.errors.has('moreinfovisa') }"></textarea>

            </div>
            <has-error :form="form" field="moreinfovisa"></has-error>

        </div>

        <h2>Criminal Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="policecertificate">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="form.policecertificate" class="custom-select" name="policecertificate" id="policecertificate"  :class="{ 'is-invalid': form.errors.has('policecertificate') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="policecertificate"></has-error>

            </div>
            <div class="form-group col-md-6">
                <label for="criminaloffence">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="form.criminaloffence" class="custom-select" name="criminaloffence" id="criminaloffence" :class="{ 'is-invalid': form.errors.has('criminaloffence') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="criminaloffence"></has-error>

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfocriminal">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="form.moreinfocriminal" class="custom-select" name="moreinfocriminal" placeholder="More Info About your criminal Background" id="moreinfocriminal" :class="{ 'is-invalid': form.errors.has('moreinfocriminal') }"></textarea>
                <has-error :form="form" field="moreinfocriminal"></has-error>

            </div>

        </div>

        <h2>Court Background</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="courtproceduresabroad">Have You or a family member ever had tuberculosis of the lungs? </label>
                <select v-model="form.courtproceduresabroad" class="custom-select" name="courtproceduresabroad" id="courtproceduresabroad"  :class="{ 'is-invalid': form.errors.has('courtproceduresabroad') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>
                <has-error :form="form" field="courtproceduresabroad"></has-error>

            </div>
            <div class="form-group col-md-6">
                <label for="courtprocedureshome">Do you have any physical or mental disorder that would require social  and/or heatl services other than medication?</label>
                <select v-model="form.courtprocedureshome" class="custom-select" name="courtprocedureshome" id="courtprocedureshome" :class="{ 'is-invalid': form.errors.has('courtprocedureshome') }">
                    <option selected>Please select One</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not Sure</option>
                </select>

                <has-error :form="form" field="courtprocedureshome"></has-error>

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="moreinfocourt">If you answered yes to any of the questions above, please provide details.</label>
                <textarea  v-model="form.moreinfocourt" class="custom-select" name="moreinfocourt" placeholder="More Info Abouth your medical Background" id="moreinfocourt" :class="{ 'is-invalid': form.errors.has('moreinfocourt') }"></textarea>
                <has-error :form="form" field="moreinfocourt"></has-error>

            </div>

        </div>




        <div class="text-right mt-4">
            <button  class="btn  btn-sm" type="submit">Save</button>
        </div>
    </form>
    <countries-visited></countries-visited>
    </div>
</template>

<script>



    export default {

        data() {
            return {

                form: new Form({
                    familytuberculosis: '',
                    mentaldisorder: '',
                    moreinfomedical: '',
                    beyondvalidity: '',
                    refusedentry: '',
                    previousapplication: '',
                    moreinfovisa: '',
                    policecertificate: '',
                    criminaloffence: '',
                    moreinfocriminal: '',
                    courtproceduresabroad: '',
                    courtprocedureshome: '',
                    moreinfocourt: '',
                }),



            }
        },
        methods: {
            onSubmit() {

                this.form.post('/store-background-info')
                    .then(() => {
this.$emit('AfterCreate');
                        flash('Background Info Saved.', 'success');
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
            getBackgroundInfo() {
                axios.get('/get-background-info').then(({data}) => (this.form.fill(data)));
            },
        },
        created() {
            this.getBackgroundInfo();

            Fire.$on('AfterCreate',() =>{
                this.getBackgroundInfo();

            });
        },
    }




</script>
