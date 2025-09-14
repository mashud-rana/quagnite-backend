require("./bootstrap");
window.Vue = require("vue").default;
import Vuelidate from "vuelidate";
import Select2 from "v-select2-component";
// import { Datetime } from "vue-datetime";
// import "vue-datetime/dist/vue-datetime.css";
import CKEditor from "ckeditor4-vue";
import VueSweetalert2 from "vue-sweetalert2";

Vue.use(Vuelidate);
Vue.component("Select2", Select2);
// Vue.use(Datetime);
Vue.use(CKEditor);
Vue.use(VueSweetalert2);

// Vue.component("datetime", Datetime);

// CMS
Vue.component("cms-page-edit", () => import("./components/admin/cms/page/edit.vue"));

// Global mixin
Vue.mixin({
    methods: {
        cmsCheckChangeKey(text) {
           // convert the string button_text to Button Text
              return text.replace(/_/g, " ").replace(/\b\w/g, (l) => l.toUpperCase());
        },
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
        showSomethingWrong(message="") {
            console.log(message, "message");
            let timerInterval;
            Vue.swal({
                icon: "error",
                html: "<span>" + (message || 'Something is wrong!') + "</span>" + "<br>",
                showConfirmButton: true,
                timer: 2000,
                willClose: () => {
                    clearInterval(timerInterval);
                },
            });
        },
    },
});

const app = new Vue({
    el: "#app",
});
