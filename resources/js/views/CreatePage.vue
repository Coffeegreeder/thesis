<template>
    <div class="testus">
      <!-- <Result /> -->

        <div
        v-for="question in questions"
        :key="question.page">
            <div class="item" v-if="question.page == page">
                <h2> Вопрос - {{ question.page }} из 15</h2>
                <!-- ещё один v-if для проверки x баллов для функции increment -->
                <div v-if="page <= 3">
                  <div class="question-btn" @click="incrementX"> {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="decrementX"> {{question.task_3}}</div>
                </div>
                <div v-if="page > 3 && page <= 6">
                  <div class="question-btn" @click="incrementY">Y пошёл {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="decrementY"> {{question.task_3}}</div>
                </div>
                <div v-if="page > 6">
                  <div class="question-btn" @click="incrementY">Стили {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="decrementY"> {{question.task_3}}</div>
                </div>
            </div>
        </div>
        <button v-if="page != 1 && page < 16" class="question-btn" @click="refresh"> Сбросить </button>
        <Result v-if="page == 16" />
        <div class="question-btn"> x: {{x}} </div>
        <div class="question-btn"> y: {{y}} </div>

    </div>
</template>
<script>
    import Result from './TemplateViewer.vue'

    export default {
        name: "CreatePage",
        components: {
            Result,
        },
        data() {
            return {
                questions: [
                    {
                        page: 1,
                        task_1: 'checkin', // +
                        task_2: 'puckinckin', // skip
                        task_3: 'looking', // -
                    },
                    {
                        page: 2,
                        task_1: 'non',
                        task_2: '',
                        task_3: 'вопросус',
                    },
                    {
                        page: 3,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: '',
                    },
                    {
                        page: 4,
                        task_1: 'тут будет Y',
                        task_2: 'вопросус',
                        task_3: 'вп',
                    },
                    {
                        page: 5,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 6,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 7,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 8,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 9,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 10,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 11,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 12,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 13,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 14,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 15,
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    }
                ],
            }
        },
        methods: {
            incrementX () {
              this.$store.commit('incrementX')
            },
            decrementX () {
            	this.$store.commit('decrementX')
            },
            incrementY () {
              this.$store.commit('incrementY')
            },
            decrementY () {
            	this.$store.commit('decrementY')
            },
            forward(){
                this.$store.commit('forward')
            },
            refresh(){
                this.$store.commit('refresh')
            }
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
        },
    }
</script>
