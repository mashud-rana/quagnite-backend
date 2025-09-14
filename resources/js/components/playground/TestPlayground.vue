<template>
  <div>
    <loader :loader="isLoaderActive" :message="msg"></loader>

    <section
      class="all-playgournd bg-white pb-40 ic-section-space"
      v-if="!isLoaderActive"
    >
      <div class="container">
        <div class="ic-codePlayground--liveCode p-0">
          <div class="ic-codePlayground--left">
            <div class="ic-codePlayground-header">
              <ul class="edit-tabs">
                <li><a href="#">Task</a></li>
              </ul>
              <ul class="editor-times">
                <li><span class="pro-names">MCdns</span></li>
                <li>
                  <span class="ic-times-prime"
                    ><i class="ri-timer-line"></i
                  ></span>
                </li>
                <li>
                  <span class="ic-times-count">
                    <countdown
                      :time="labDuration"
                      format="HH:mm:ss"
                      ref="countdown"
                    ></countdown>
                  </span>
                </li>
              </ul>
            </div>
            <div class="ic-codePlayground-innerDiv pt-4">
              <!-- here have to show instruction -->
              <div v-html="instructions"></div>
            </div>
          </div>
          <div class="ic-codePlayground--right">
            <div class="ic-codePlayground--main-code d-block bg-white">
              <div class="ic-terminal-header">
                <ul class="ic-tabs-terminal row">
                  <li class="col-auto">
                    <a href="#">Terminal</a>
                  </li>
                  <li class="col-auto">
                    <a href="#">
                      Grafana
                      <i class="ri-arrow-right-up-line"></i>
                    </a>
                  </li>
                  <li class="col-auto">
                    <a href="#"
                      >Prometheus
                      <i class="ri-arrow-right-up-line"></i>
                    </a>
                  </li>
                </ul>
                <ul class="ic-resize">
                  <li>
                    <a href="#" class="bg-red"><i class="ri-close-fill"></i></a>
                  </li>
                  <li>
                    <a
                      href="#"
                      onclick="fullscreen(event.target)"
                      class="btn-fullscreen"
                    >
                      <i class="ri-fullscreen-line full"></i>
                      <i class="ri-fullscreen-exit-line exitFull d-none"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="terminel-height">
                <div class="horizontal-bar-wrap" v-if="progressBar">
                  <div class="bar1 bar"></div>
                </div>
                <!-- <play-loader :loader="isPlayLoaderActive" />
                <iframe
                  :src="url"
                  width="100%"
                  height="500px"
                  frameborder="0"
                  @load="iframeLoaded"
                ></iframe> -->
                <editor
                  ref="editor"
                  v-model="code"
                  @init="editorInit"
                  theme="monokai"
                  class="ace-editor"
                  height="631"
                  width="100%"
                ></editor>
                <!-- <embed :src="url" height="100%" width="100%"></embed> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Countdown from "vue-countdown-plus";
import Loader from "./inc/Loader.vue";
import PlayLoader from "./inc/PlayLoader.vue";
import Editor from "vue2-ace-editor";
import ConfirmDialog from "./inc/SweetAlert.vue"

export default {
  components: {
    Countdown,
    Loader,
    PlayLoader,
    Editor,
    ConfirmDialog,
  },
  props: ["instructions"],
  data() {
    return {
      url: "",
      duration: 0,
      progressBar: true,
      isLoaderActive: false,
      isPlayLoaderActive: true,
      msg: "Lab is Getting ready, please Wait a moment",
    };
  },
  computed: {
    labDuration() {
      return this.duration * 1000;
    },
  },
  methods: {
    iframeLoaded() {
      // This function will be called when the iframe content has loaded
      console.log("Iframe content has been fully loaded");

      // Hide the loader
      this.isPlayLoaderActive = false;
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
.ic-codePlayground--right {
  height: 500px;
}

.all-playground-loader {
  z-index: 9999999;
}
</style>
