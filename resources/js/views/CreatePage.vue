<template>
    <div class="testus">
      <!-- <FirstQuestion
        v-for="question in questions"
        :key="question.page"
        :testing="question"
        @sendCount="showData" /> -->

        <div
        class="s"
        v-for="question in questions"
        :key="question.page">
            <div class="item" v-if="question.page == current_page">
                <h1>{{ question.page }}</h1>
                <div class="label"> {{current_page}}</div>
                <div class="label">3</div>
            </div>
        </div>
        <button class="label" @click="counter"> {{current_page}} </button>
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
                current_page: 1
            }
        },
        methods: {
            showData(data){
                console.log(data)
            },
            counter(current_page){
                this.current_page++
            }
        }
    }
</script>
