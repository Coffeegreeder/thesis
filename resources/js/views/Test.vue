<template>
<div class="s">
    <h1>{{ testing.page }}</h1>
    <button class="label" @click="current_page += 1"> 1 </button>
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
        data(){
            return{
                current_page: 1,
            }
        },
        methods: {
            counter(current_page){
                current_page + 1
                // return current_page
                console.log(current_page)
                // this.$emit('sendCount', this.testing.page)
            }
        },

    }
</script>
