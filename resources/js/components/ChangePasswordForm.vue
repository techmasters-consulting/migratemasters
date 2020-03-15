<template>
    <form  method="post" action="/change-password" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">
        <div class="form-group">
            <label for="current_password">Old Password</label>
            <input id="current_password" v-model="current_password"  class="form-control" type="password" placeholder="Enter old password" name="current_password" autocomplete="current-password">
            <span class="help is-danger" v-text="errors.get('current_password')"></span>
        </div>

        <div class="form-group">
        <label for="new_password">New Password</label>
        <input id="new_password" name="new_password" v-model="new_password" class="form-control" type="password" placeholder="Enter new password">
        <span class="help is-danger" v-text="errors.get('new_password')"></span>
    </div>

        <div class="form-group">
            <label for="new_confirm_password">Confirm New Password</label>
            <input name="new_confirm_password" v-model="new_confirm_password"  id="new_confirm_password" class="form-control" type="password" placeholder="Enter new password again">

            <span class="help is-danger" v-text="errors.get('new_confirm_password')"></span></div>

        <div class="btn-container">
            <button class="btn btn-white btn-block" type="submit">Update Password</button>
        </div>
    </form>

</template>

<script>
    class Errors{
        constructor(){

            this.errors={};
        }
        get(field){
            if(this.errors[field])
            {
                return this.errors[field][0];
            }
        }
        record(errors){
            this.errors = errors;
        }
        clear(field){
            delete this.errors[field];
        }
        any(){
            return Object.keys(this.errors).length > 0;
        }
    }
    export default {

        data() {
            return {
                new_confirm_password : '',
                new_password : '',
                current_password: '',
                errors: new Errors(),
            }
        },

        methods: {
            onSubmit() {

                axios.post('/change-password', this.$data)
                    .then(response => {
                        flash('Your password has been updated.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch(error => {
                        this.errors.record(error.response.data.errors);
                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                    }

                );
            },

            },
    }
</script>
