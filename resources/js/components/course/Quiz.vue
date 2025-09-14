<template>
    <div class="ic-codePlayground--left w-97">
        <div class="ic-codePlayground-header">
            <ul class="edit-tabs">
                <li>
                    <a href="#">Task</a>
                </li>
            </ul>
            <ul class="editor-times">
                <li>
                    <span class="pro-names">MCdns</span>
                </li>
                <li>
                    <span class="ic-times-prime"
                        ><i class="ri-timer-line"></i
                    ></span>
                </li>
                <li>
                    <span class="ic-times-count">
                        <countdown
                            :time="1 * 60 * 60 * 1000"
                            format="HH:mm:ss"
                        ></countdown>
                    </span>
                </li>
            </ul>
        </div>
        <div class="ic-codePlayground-innerDiv" v-if="examStart">
            <div class="ic-codePlayground-questionBackFroward-btn">
                <!-- <button @click="prevQuestion"><i class="ri-arrow-left-line"></i> Prev</button> -->
                <button @click="nextQuestion">
                    Next <i class="ri-arrow-right-line"></i>
                </button>
            </div>
            <div class="ic-codePlayground-question">
                <p
                    class="ic-question-text"
                    v-html="questions[index]['question']"
                ></p>
                <ul class="ic-question">
                    <li
                        v-for="(answer, key) in questions[index]['answers']"
                        :key="answer.id"
                    >
                        <div class="form-check p-0 m-0">
                            <label
                                class="form-check-label ic-ques-ans"
                                :ref="key"
                            >
                                <input
                                    class="form-check-input ic-question-checkInput me-2 ms-0"
                                    type="radio"
                                    name="question"
                                    v-model="selectedAnswer"
                                    :value="key"
                                    id="flexCheckDefault4"
                                />
                                {{ answer }}
                            </label>
                        </div>
                    </li>
                    <!-- <li>
                            <div class="form-check p-0 m-0">
                                <label class="form-check-label ic-ques-ans wrong">
                                    <input class="form-check-input ic-question-checkInput me-2 ms-0" type="radio"
                                        name="question" value="" id="flexCheckDefault4" checked> Default checkbox
                                </label>
                            </div>
                        </li> -->
                </ul>
            </div>
            <button class="ic-check-hint" @click="hintToggle">
                Check Hint
            </button>
            <div class="ic-corrrct-answare" v-show="hintShow">
                <p class="ic-explanation">
                    <span>Explanation : </span>
                    {{ questions[index]["hint"] }}
                </p>
            </div>

            <div class="ic-answar-submit">
                <button @click="resetQuiz">Reset Quiz</button>
                <p>Question-{{ currentQusIndex }}/{{ qusCount }}</p>
                <button @click="submitAnswer" :disabled="submitBtnDisable">
                    Submit
                </button>
            </div>
        </div>
        <div v-if="examEnd" class="ic-codePlayground-questionMark">
            <ul class="ic-question-Numbers">
                <li>
                    <i class="ri-question-fill"></i>
                    <div class="icquestion-show">
                        <p>Number of Question</p>
                        <p>{{ qusCount }}</p>
                    </div>
                </li>
                <li>
                    <img src="/frontend/images/award.webp" alt="" />
                    <div class="icquestion-show">
                        <p>Pass Marks</p>
                        <p>{{ passMark }}%</p>
                    </div>
                </li>
            </ul>
            <div class="ic-congratulation">
                <h3 v-if="score >= passMark">Congratulations! You Passed</h3>
                <h3 v-else>You Failed!</h3>
                <ul class="ic-congra-select">
                    <li>
                        <img src="/frontend/images/list.png" alt="" />
                        <div class="icquestion-show">
                            <p>Correct Answer</p>
                            <p>{{ correctAnswer }}/{{ qusCount }}</p>
                        </div>
                    </li>
                    <li>
                        <img src="/frontend/images/award.webp" alt="" />
                        <div class="icquestion-show">
                            <p>Your Score</p>
                            <p>{{ score }}%</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import Countdown from "vue-countdown-plus";
export default {
  components: {
    Countdown,
  },
  props: ["questions"],
  data() {
    return {
      examEnd: false,
      examStart: true,
      submitBtnDisable: true,
      index: 0,
      selectedAnswer: "",
      correctAnswer: 0,
      wrongAnswer: 0,
      passMark: 40,
      qusCount: this.questions.length,
      hintShow: false,
      answeredElement: null,
    };
  },

  watch: {
    index(value) {
      if (value == this.qusCount) {
        this.examStart = false;
        this.examEnd = true;
      }
    },

    selectedAnswer(value) {
      if (value) {
        this.submitBtnDisable = false;
      }
    },
  },
  computed: {
    currentQusIndex() {
      return this.index + 1;
    },
    score() {
      return Math.round((100 * this.correctAnswer) / this.qusCount);
    },
  },
  methods: {
    nextQuestion() {
      this.answeredElement.classList.remove("active");
      this.answeredElement.classList.remove("wrong");

      this.index++;
      this.selectedAnswer = "";
    },
    prevQuestion() {
      this.index--;
      this.selectedAnswer = "";
    },
    showResults() {
      this.index++;
    },
    resetQuiz() {
      this.index = 0;
      this.selectedAnswer = "";
      this.correctAnswer = 0;
      this.wrongAnswer = 0;
    },
    hintToggle() {
      this.hintShow = !this.hintShow;
    },
    submitAnswer() {
      let refKey = this.selectedAnswer;
      this.submitBtnDisable = true;
      this.answeredElement = this.$refs[refKey][0];

      if (this.selectedAnswer == this.questions[this.index]["correctAnswer"]) {
        this.correctAnswer++;
        this.answeredElement.classList.add("active");
      } else {
        this.wrongAnswer++;
        this.answeredElement.classList.add("wrong");
      }
    },
  },
};
</script>

<style></style>
