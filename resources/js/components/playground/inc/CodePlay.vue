<template>
  <div class="ic-codePlayground--right">
    <div class="ic-codePlayground--main-code">
      <div class="ic-codeplay-live">
        <div class="ic-terminal-header">
          <ul class="ic-tabs-terminal">
            <li>
              <a href="#">{{ fileName }}</a>
            </li>
          </ul>
          <ul class="ic-resize">
            <li @click="playCode">
              <a href="#">
                <i class="ri-play-mini-fill"></i>
                Run
              </a>
            </li>
          </ul>
        </div>
        <div class="terminel-height">    
                <editor
                  ref="editor"
                  v-model="code"
                  @init="editorInit"
                  theme="monokai"
                  class="ace-editor"
                  height="100%"
                  width="100%"
                >
              </editor>
        </div>
      </div>
      <div class="ic-output">
        <div class="ic-terminal-header">
          <ul class="ic-tabs-terminal">
            <li>
              <a href="#">Output</a>
            </li>
          </ul>
          <ul class="ic-resize">
            <li @click="clearCode">
              <a href="#">
                <i class="ri-brush-line"></i>
                Clear
              </a>
            </li>
            <li>
              <a
                href="#"
                class="btn-fullscreen"
                onclick="fullscreen(event.target)"
              >
                <i class="ri-fullscreen-line full"></i>
                <i class="ri-fullscreen-exit-line exitFull d-none"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="horizontal-bar-wrap" v-if="progressBar">
          <div class="bar1 bar"></div>
        </div>
        <div class="text-white p-2">{{ output }}</div>
      </div>
    </div>
  </div>
</template>

  <script>
import Editor from "vue2-ace-editor";
export default {
  components: {
    Editor,
  },
  props: ["url", "fileName"],
  data() {
    return {
      code: "",
      output: "",
      progressBar: false,
    };
  },
  methods: {
    playCode() {
      this.progressBar = true;
      let currentObj = this;
      axios
        .post(currentObj.url, {
          code: this.code,
        })
        .then(function (response) {
          currentObj.progressBar = false;

          if (response.data.stdout) {
            currentObj.output = response.data.stdout;
          } else if (response.data.stderr) {
            currentObj.output = response.data.stderr;
          } else {
            currentObj.output = "Error! Please Try again";
          }
        })
        .catch(function (error) {
          currentObj.output = error;
        });
    },
    clearCode() {
      this.code = "";
      this.output = "";
    },
    editorInit: function () {
      require("brace/ext/language_tools"); //language extension prerequsite...
      require("brace/mode/less");
      require("brace/theme/monokai");
    },
  },
};
</script>

  <style scoped>
.ace-editor {
  font-size: 18px;
}
</style>
