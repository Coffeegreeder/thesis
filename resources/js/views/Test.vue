<template>
<div class="s">
    <h1>{{ testing.page }}</h1>
    <button class="label" @click="counter"> 1 </button>
    <div class="label"> {{current_page}}</div>
    <div class="label">3</div>
</div>
</template>

<script>
    export default {
        name: "FirstQuestion",
        props: {
            testing: {
                type: Object,
                default  (){
                    return {}
                }
            }

        },
        methods: {
            counter(){
                this.$emit('sendCount', this.testing.page)
            }
        },
        data(){
            return{
                
            }
        }
    }
</script>
