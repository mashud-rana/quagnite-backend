<template>
  <div>
    <!-- <div v-if="isLoaderActive" class="all-playground-loader">
            <div class="loader-all">
                <p>{{ msg }}</p>
                <h2>Loading</h2>
            </div>
        </div> -->
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
            <div class="ic-codePlayground-innerDiv pt-4"></div>
          </div>
          <div class="ic-codePlayground--right">
            <div class="ic-codePlayground--main-code d-block bg-white">
              <div class="ic-terminal-header">
                <ul class="ic-tabs-terminal">
                  <li><a href="#">Ubuntu 20.04 Terminal</a></li>
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
  props: {
    playType: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      url: "",
      duration: 0,
      isLoaderActive: true,
      msg: "Lab is Getting ready, please Wait a moment",
    };
  },
  computed: {
    labDuration() {
      return this.duration * 1000;
    },
  },
  mounted() {
    this.getLabInfo();
  },
  methods: {
    async getLabInfo() {
      await axios
        .get("/playground/osbase/provision/")
        .then((response) => response.data.lab)
        .then((lab) => {
          if (typeof lab.url !== "undefined" && lab.url !== null) {
            this.labStatusCheck(lab);
          } else {
            window.location = "/playground/not-available";
          }
        })
        .catch((error) => {
          console.log(error);
          window.location = "/playground/not-available";
        });
    },
    async labStatusCheck(lab) {
      const URL = "/playground/ubuntu/labstatus";
      await axios
        .post(URL, {
          url: lab.url,
        })
        .then((response) => {
          this.isLoaderActive = false;
          this.duration = lab.duration;
          this.url = lab.url;
        })
        .catch((error) => {
          window.location = "/playground/not-available";
        });
    },
    // async labStatusCheck(lab) {
    //   try {
    //     const response = await axios.head(lab.url);

    //     if (response.status === 200) {
    //       this.isLoaderActive = false;
    //       this.duration = lab.duration;
    //       this.url = lab.url;
    //     } else {
    //       console.error("Error Status Code:", response.status);
    //       setTimeout(() => this.labStatusCheck(lab), 5000);
    //     }
    //   } catch (error) {
    //     console.error("Error:", error);

    //     // Retry after 3 seconds
    //     setTimeout(() => this.labStatusCheck(lab), 5000);
    //   }
    // },
    endLab(url) {
      this.msg = "Lab is closing";
      this.isLoaderActive = true;
      axios
        .post("/playground/ubuntu/labEnd", {
          url: url,
        })
        .then(function (response) {
          window.location = "/playground";
        })
        .catch(function (error) { });
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
