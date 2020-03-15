<template>
<section>
    <strong class="heading d-block">My Financial Plan</strong>
    <form   @submit.prevent="onSubmit">
        <div class="form-group">
            <label for="sponsor">Financial Support</label>
            <select v-model="form.sponsor"  name="sponsor" class="custom-select" id="sponsor" :class="{ 'is-invalid': form.errors.has('sponsor') }">
                <option value="" >Please select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>

            </select>
            <has-error :form="form" field="sponsor"></has-error>

        </div>
        <div class="form-group">
            <label for="budget">Budget</label>
            <input v-model="form.budget" name="budget"  id="budget" class="form-control" type="text" placeholder="Enter your budget" :class="{ 'is-invalid': form.errors.has('budget') }">
          <has-error :form="form" field="budget"></has-error>
        </div>
        <div class="btn-container">
            <button class="btn  btn-block" type="submit"   >Save Details</button>
        </div>
    </form>
</section>

</template>

<script>

    export default {
        //props: ['study_goals'],
        data() {

            return {
                datas: [],
                form: new Form({
                    sponsor:'',
                    budget:'',
                }),

            }
        },
        methods: {
            onSubmit() {
               // this.$progress.start();
                this.form.post('/store-finsup')
                    .then(() => {
                        flash('Your Financial Support has been updated.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    //    this.$progress.finish();
                    }).catch(() => {
                 //   this.$progress.fail();
                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },
            getFinSup() {
                axios.get("/get-finsup").then(({ data }) => (this.form.fill(data)));
            },
        },
        created() {
            this.getFinSup();
        },
    }
</script>


