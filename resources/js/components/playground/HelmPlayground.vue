<template>
  <div>
    <loader :loader="isLoaderActive" :message="msg"></loader>

    <section class="all-playgournd bg-white pb-40 ic-section-space" v-if="!isLoaderActive">
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
                  <span class="ic-times-prime"><i class="ri-timer-line"></i></span>
                </li>
                <li>
                  <span class="ic-times-count">
                    <countdown :time="labDuration" format="HH:mm:ss" ref="countdown" @finish="handleFinish"></countdown>
                  </span>
                </li>
              </ul>
            </div>
            <div class="ic-codePlayground-innerDiv pt-4">
              <div v-html="instructions"></div>
            </div>
          </div>
          <div class="ic-codePlayground--right">
            <div class="ic-codePlayground--main-code d-block bg-white">
              <div class="ic-terminal-header">
                <ul class="ic-tabs-terminal">
                  <li><a href="#">Terminal</a></li>
                </ul>
                <ul class="ic-resize">
                  <li>
                    <confirm-dialog :url="url" :successCallback="endLab" confirmText="You won't be able to revert this!"
                      confirmButtonText="Yes, close it!">
                    </confirm-dialog>
                  </li>
                  <li>
                    <a href="#" onclick="fullscreen(event.target)" class="btn-fullscreen">
                      <i class="ri-fullscreen-line full"></i>
                      <i class="ri-fullscreen-exit-line exitFull d-none"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="terminel-height">
                <iframe :src="url" width="100%" height="500px" frameborder="0"></iframe>
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
import ConfirmDialog from "./inc/SweetAlert.vue";
export default {
  components: {
    Countdown,
    Loader,
    ConfirmDialog,
  },
  data() {
    return {
      url: "",
      duration: 0,
      isLoaderActive: true,
      instructions: "",
      msg: "Lab is Getting ready, please Wait a moment",
      tries: 0,
      maxTries: 30,
      errorUrl: "/playground/not-available",
      playHomeUrl: "",
      checkStatusUrl: "/playground/helm/labstatus",
    };
  },
  computed: {
    labDuration() {
      return this.duration * 1000;
    },
  },
  watch: {
    tries(value) {
      if (value == this.maxTries) {
        window.location = this.errorUrl;
      }
    },
  },
  mounted() {
    this.getLabInfo();
  },
  methods: {
    async getLabInfo() {
      await axios
        .get("/playground/helm/provision")
        .then((response) => response.data.lab)
        .then((lab) => {
          // if user refresh the page its check already lab initiated or not if so it returns refresh = true.
          if (typeof lab.refresh !== "undefined" && lab.refresh) {
            this.labStatusCheck(lab);
          } else if (typeof lab.url !== "undefined" && lab.url !== null) {
            setTimeout(() => {
              this.labStatusCheck(lab);
            }, 20000);
          } else {
            window.location = this.errorUrl;
          }
        })
        .catch((error) => {
          window.location = this.errorUrl;
        });
    },
    async labStatusCheck(lab) {
      this.tries++;
      await axios
        .post(this.checkStatusUrl, {
          url: lab.url,
        })
        .then((response) => {
          // if lab is ready it returns 200. otherwise request again to check lab status
          if (response.data.status == 200) {
            this.isLoaderActive = false;
            this.duration = lab.duration;
            this.url = lab.url;
            this.instructions = lab.instructions;
            this.playHomeUrl = lab.home_url;
          } else {
            setTimeout(() => {
              this.labStatusCheck(lab);
            }, 5000);
          }
        })
        .catch((error) => {
          setTimeout(() => {
            this.labStatusCheck(lab);
          }, 5000);
        });
    },
    endLab(url) {
      this.msg = "Lab is closing";
      this.isLoaderActive = true;
      axios
        .post("/playground/helm/labEnd", {
          url: url,
        })
        .then((response) => {
          window.location = this.playHomeUrl;
        })
        .catch((error) => {
          window.location = this.playHomeUrl;
        });
    },
    handleFinish() {
      this.endLab(this.url);
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
