<template>
    <div class="create-page">
      <!-- <Result /> -->
    <div class="back"></div>
        <div
        v-for="question in questions"
        :key="question.page">
            <div class="item noselect" v-if="question.page == page">
                <h2> Вопрос - {{ question.page }} из 15</h2>
                <!-- ещё один v-if для проверки x баллов для функции increment -->
                <div v-if="page <= 3">
                    <div class=""> {{ question.text }}</div>
                  <div class="question-btn" @click="incrementX"> {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="decrementX"> {{question.task_3}}</div>
                </div>
                <div v-if="page > 3 && page <= 6">
                    <div class=""> {{ question.text }}</div>
                  <div class="question-btn" @click="incrementY"> {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="decrementY"> {{question.task_3}}</div>
                </div>
                <div v-if="page > 6">
                    <div class=""> {{ question.text }}</div>
                  <div class="question-btn" @click="forward"> {{question.task_1}}</div>
                  <div v-if="question.task_2" class="question-btn" @click="forward"> {{question.task_2}}</div>
                  <div v-if="question.task_3" class="question-btn" @click="forward"> {{question.task_3}}</div>
                </div>
            </div>
        </div>
        <button v-if="page != 1 && page < 16" class="question-btn" @click="refresh"> Сбросить </button>
        <Result v-if="page == 16" />

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
                        text: 'Цель вашего сайта:',
                        task_1: 'нужно что-то продать', // +
                        task_2: 'нужно что-то представить', // skip
                        task_3: 'нужно проинформировать', // -
                    },
                    {
                        page: 2,
                        text: 'Нужна ли обратная связь?',
                        task_1: 'Да',
                        task_2: '',
                        task_3: 'Нет',
                    },
                    {
                        page: 3,
                        text: 'Сайт для продвижение бренда?',
                        task_1: 'да',
                        task_2: '',
                        task_3: 'нет',
                    },
                    {
                        page: 4,
                        text: 'Нужна ли система авторизации?',
                        task_1: 'да',
                        task_2: 'возможно',
                        task_3: 'нет',
                    },
                    {
                        page: 5,
                        text: 'количество контента:',
                        task_1: 'много',
                        task_2: 'средне',
                        task_3: 'мало',
                    },
                    {
                        page: 6,
                        text: 'сайт для регулярного пользования клиентами?',
                        task_1: 'да',
                        task_2: '',
                        task_3: 'нет',
                    },
                    {
                        page: 7,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 8,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 9,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 10,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 11,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 12,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 13,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 14,
                        text: '',
                        task_1: 'non',
                        task_2: 'вопросус',
                        task_3: 'ру',
                    },
                    {
                        page: 15,
                        text: '',
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
