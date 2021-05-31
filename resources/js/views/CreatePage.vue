<template>
    <div class="testus">
      <FirstQuestion
        v-for="question in questions"
        :key="question.page"
        :testing="question"
        @sendCount="showData" />
    </div>
</template>
<script>
    import FirstQuestion from './Test.vue'

    export default {
        name: "CreatePage",
        components: {
            FirstQuestion,
        },
        data() {
            return {
                questions: [
                    {
                        page: 1,
                        task: 'checkin',
                    },
                    {
                        page: 2,
                        task: 'non',
                    }
                ],
            }
        },
        methods: {
            showData(data){
                console.log(data)
            }
        }
    }
</script>
