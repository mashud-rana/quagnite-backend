<template>
  <section class="ic-aws-section">
    <div class="aws-info">
      <!-- spinner -->
      <div class="ic-spinner-load" v-if="loader">
        <img src="/new-frontend/images/aws-loader.gif" alt="" />
        <p>{{ msg }}</p>
      </div>
      <!-- spinner -->
      <div v-if="!loader">
        <h5>You can now open a console link and enter credentials:</h5>
        <ul>
          <li>
            <span class="color-deep-gray">Console Link:</span>
            <span ref="url"> {{ url }} </span>
            <i class="ri-file-copy-line" v-clipboard:copy="url" v-clipboard:success="onCopy"></i>
          </li>
          <li>
            <span class="color-deep-gray">Username : </span><span ref="username">{{ username }} </span>
            <i class="ri-file-copy-line" v-clipboard:copy="username" v-clipboard:success="onCopy"></i>
          </li>
          <li>
            <span class="color-deep-gray">Password : </span><span ref="password">{{ password }}</span>
            <i class="ri-file-copy-line" v-clipboard:copy="password" v-clipboard:success="onCopy"></i>
          </li>
          <li>
            <span class="color-deep-gray">Expires in : </span><span v-if="duration">
              <countdown ref="countdown" :time="labDuration" format="HH:mm:ss" @finish="handleFinish"></countdown>
            </span>
          </li>
        </ul>
        <div class="ic-btn-aws">
          <confirm-dialog :url="labId" :successCallback="endLab" confirmText="Are you sure you want to end the lab?"
            confirmButtonText="Yes, end it!">
            <button class="btn-book">End</button>
          </confirm-dialog>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Countdown from "vue-countdown-plus";
import ConfirmDialog from "./inc/SweetAlert.vue";
export default {
  components: {
    Countdown,
    ConfirmDialog,
  },
  data() {
    return {
      url: "",
      username: "",
      password: "",
      copyItem: "",
      duration: 0,
      labId: null,
      loader: true,
      msg: "Lab is Getting ready, please Wait a moment",
      errorUrl: "/playground/not-available",
      playHomeUrl: "/student/my-playground",
    };
  },
  computed: {
    labDuration() {
      return this.duration * 1000;
    },
  },
  created() {
    this.getLabInfo();
  },
  methods: {
    async getLabInfo() {
      await axios.get("/playground/aws/provision").then((response) => {
        let aws = response.data.data;
        if (aws.not_available) {
          this.msg = aws.msg;
        }
        if (aws.url) {
          this.loader = false;
          this.url = aws.url;
          this.username = aws.username;
          this.password = aws.password;
          this.duration = aws.duration;
          this.labId = aws.lab_id;
        }
      });
    },
    endLab(labId) {
      this.msg = "Lab is closing";
      this.loader = true;
      axios
        .post("/playground/aws/labEnd", {
          lab_id: labId,
        })
        .then((response) => {
          window.location = this.playHomeUrl;
        })
        .catch((error) => {
          window.location = this.playHomeUrl;
        });
    },

    onCopy(event) {
      event.trigger.classList.remove("ri-file-copy-line");
      event.trigger.classList.add("ri-check-double-fill");

      setTimeout(() => {
        event.trigger.classList.remove("ri-check-double-fill");
        event.trigger.classList.add("ri-file-copy-line");
      }, 1000);
    },

    handleFinish() {
      this.endLab(labId);
    },
  },
};
</script>

<style scoped>
.ic-spinner-load {
  height: 200px !important;
}
</style>
