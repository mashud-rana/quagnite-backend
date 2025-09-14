<template>
  <div>
    <loader :loader="isLoaderActive" :message="msg"></loader>
    <div v-if="!isLoaderActive" class="ic-codePlayground--liveCode">
      <quiz-app
        :questions="allQuestions"
        :qusCount="allQuestions.length"
      ></quiz-app>
      <code-play :url="url" fileName="index.java"></code-play>
    </div>
  </div>
</template>

<script>
import QuizApp from "./inc/QuizApp.vue";
import CodePlay from "./inc/CodePlay.vue";
import Loader from "./inc/Loader.vue";
import ConfirmDialog from "./inc/SweetAlert.vue";
export default {
  components: {
    QuizApp,
    CodePlay,
    Loader,
    ConfirmDialog,
  },
  data() {
    return {
      allQuestions: [],
      url: "/playground/runJavaCode",
      isLoaderActive: true,
      msg: "Lab is Getting ready, please Wait a moment",
    };
  },

  mounted() {
    this.getAllQuestions();
  },
  methods: {
    getAllQuestions() {
      axios
        .get("/playground/java/get-mcq")
        .then((response) => {
          this.allQuestions = response.data;

          if (this.allQuestions.length > 0) {
            this.isLoaderActive = false;
          } else {
            window.location = "/playground/not-available";
          }
        })
        .catch((error) => {
          window.location = "/playground/not-available";
        });
    },
  },
};
</script>

<style></style>
