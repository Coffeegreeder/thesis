<template>
<div class="s">
    {{x}}
</div>
</template>

<script>
    export default {
        name: "Result",
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
