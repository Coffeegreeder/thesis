<template>
    <div class="n">very well</div>
</template>

<script>

export default {
    name: "Donat",
    props: {
        testing: {
            type: Object,
            default  (){
                return {}
            }
        }
    },
    methods: {

    },
    computed: {
        page () {
            return this.$store.state.page
        },
        x () {
            return this.$store.state.x
        },
        y () {
            return this.$store.state.y
        }
    }

}
</script>
