<template>
    <a href="#!"  @click.prevent="getConsultation" class="btn btn-md btn-primary tra-white-hover btn-arrow">
        <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
    </a>
</template>

<script>
    export default {
        name: "GetConsultation",
        methods:{
            getConsultation(){
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            },
        },
    }
</script>

<style scoped>

</style>
