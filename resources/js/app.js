require("./bootstrap");
window.Vue = require("vue").default;

import Vuelidate from "vuelidate";
import Select2 from "v-select2-component";
import moment from "moment/dist/moment.js";
import VueSweetalert2 from "vue-sweetalert2";
import VueResource from "vue-resource";
import CKEditor from "ckeditor4-vue";
import InfiniteLoading from "vue-infinite-loading";
// import { Datetime } from "vue-datetime";
import toastr from "toastr";
import "sweetalert2/dist/sweetalert2.min.css";

import VueClipboard from 'vue-clipboard2'

Vue.use(VueClipboard)

Vue.use(InfiniteLoading, {
    props: {
        spinner: "bubbles" /* other props need to configure */,
    },
});

Vue.use(Vuelidate);
Vue.component("Select2", Select2);
Vue.use(moment);
Vue.use(VueSweetalert2);
Vue.use(VueResource);
Vue.use(CKEditor);
// Vue.use(Datetime);
Vue.use(toastr);

// Vue.component("datetime", Datetime);

Vue.component("example-component", () =>
    import("./components/ExampleComponent.vue")
);
Vue.component("python-playground", () => import("./components/playground/PythonPlayground.vue"));
Vue.component("go-playground", () => import("./components/playground/GoPlayground.vue"));
Vue.component("bash-playground", () => import("./components/playground/BashPlayground.vue"));
Vue.component("java-playground", () => import("./components/playground/JavaPlayground.vue"));
Vue.component("aws-playground", () => import("./components/playground/AwsPlayground.vue"));
Vue.component("gcp-playground", () => import("./components/playground/GcpPlayground.vue"));
Vue.component("ubuntu-playground", () => import("./components/playground/UbuntuPlayground.vue"));
Vue.component("git-playground", () => import("./components/playground/GitPlayground.vue"));
Vue.component("docker-playground", () => import("./components/playground/DockerPlayground.vue"));
Vue.component("centos-playground", () => import("./components/playground/CentOsPlayground.vue"));
Vue.component("test-playground", () => import("./components/playground/TestPlayground.vue"));
Vue.component("os-base-playground", () => import("./components/playground/OsBasePlayground.vue"));
Vue.component("powershell-playground", () => import("./components/playground/PwsPlayground.vue"));
Vue.component("maven-playground", () => import("./components/playground/MavenPlayground.vue"));
Vue.component("grafana-playground", () => import("./components/playground/GrafanaPrometheusPlayground.vue"));
Vue.component("podman-playground", () => import("./components/playground/PodmanPlay.vue"));
Vue.component("terraform-playground", () => import("./components/playground/TerraformPlayground.vue"));
Vue.component("ansible-playground", () => import("./components/playground/AnsiblePlayground.vue"));
Vue.component("chef-playground", () => import("./components/playground/ChefPlayground.vue"));

Vue.component("k8ssn-playground", () => import("./components/playground/K8sSingleNodePlayground.vue"));
Vue.component("k8smn-playground", () => import("./components/playground/K8sMultiNodePlayground.vue"));
Vue.component("helm-playground", () => import("./components/playground/HelmPlayground.vue"));

Vue.component("gitlab-playground", () => import("./components/playground/GitlabPlayground.vue"));
Vue.component("argocd-playground", () => import("./components/playground/ArgocdPlayground.vue"));
Vue.component("jenkins-playground", () => import("./components/playground/JenkinsPlayground.vue"));
Vue.component("azure-playground", () => import("./components/playground/AzurePlayground.vue"));

Vue.component("course-quiz", () => import("./components/course/Quiz.vue"));
Vue.component("exam-quiz", () => import("./components/exam/Quiz.vue"));

Vue.component("student-note-component", () => import("./components/student/note/StudentNoteComponent.vue"));




Vue.mixin({
    methods: {
        showValidationError(err) {
            let error_string = '<div class="error-sa-v text-left">';
            for (const [key, value] of Object.entries(
                err.response.data.errors
            )) {
                error_string = error_string + value[0] + "<br>";

                if (value[1] != "undefined" && value[1] != undefined) {
                    error_string = error_string + value[1] + "<br>";
                }
            }
            error_string = error_string + "<div>";

            Vue.swal({
                icon: "error",
                html: error_string,
            });
        },
        showSomethingWrong() {
            let timerInterval;
            Vue.swal({
                icon: "error",
                html: "<span>Something is wrong!</span>" + "<br>",
                showConfirmButton: true,
                timer: 2000,
                willClose: () => {
                    clearInterval(timerInterval);
                },
            });
        },
    },
    filters: {
        customDateTime: function (value) {
            return moment(String(value)).format("MMMM DD, YYYY, h:mm A");
        },
        customDate: function (value) {
            return moment(String(value)).format("MMMM DD, YYYY");
        },
        capitalize: function (value) {
            if (!value) return "";
            value = value.toString();
            return value.charAt(0).toUpperCase() + value.slice(1);
        },
        limitedEventTitle: function (string) {
            return string.length > 32 ? string.slice(0, 32 - 1) + "…" : string;
        },
        limitedCustomTitle: function (string, length) {
            return string.length > length
                ? string.slice(0, length - 1) + "…"
                : string;
        },
        limitedTitle: function (string) {
            return string.length > 50 ? string.slice(0, 50 - 1) + "…" : string;
        },
        limitedSubTitle: function (string) {
            return string.length > 80 ? string.slice(0, 80 - 1) + "…" : string;
        },
    },
});

const app = new Vue({
    el: "#app",
});
