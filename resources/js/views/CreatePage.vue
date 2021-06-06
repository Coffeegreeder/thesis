<template>
    <div class="testus">
      <!-- <FirstQuestion /> -->

        <div
        class="s"
        v-for="question in questions"
        :key="question.page">
            <div class="item" v-if="question.page == page">
                <h1>{{ question.page }}</h1>
                <div class="label" @click="forward"> {{question.task_1}}</div>
                <div class="label" @click="forward"> {{question.task_2}}</div>
                <div v-if="question.task_3" class="label" @click="forward"> {{question.task_3}}</div>
            </div>
        </div>
        <button v-if="page != 1" class="label" @click="back"> Назад </button>

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
                        task_1: 'checkin',
                        task_2: 'puckinckin',
                        task_3: 'looking',
                    },
                    {
                        page: 2,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: '',
                    }
                ],
            }
        },
        methods: {
            incrementX () {
              this.$store.commit('incrementX')
            },
            forward () {
              this.$store.commit('forward')
            },
            back () {
            	this.$store.commit('back')
            }
        },
        computed: {
            page () {
	            return this.$store.state.page
            },
            x () {
              return this.$store.state.x
            }
  },
    }
</script>
