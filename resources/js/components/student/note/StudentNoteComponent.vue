<template>
  <div class="ic-student-note">
    <div class="ic-students-notes">
      <!--            <div class="editors example"></div>-->
      <div class="mb-3">
        <label class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" v-model="form_data.title" />
        <!-- <div class="" v-if="error">
          <div class="" v-for="(message, index) in error_message" :key="index">
            <span
              class="text-danger small"
              v-if="index === 'name'"
              v-for="(m, ind) in message"
              :key="ind"
              >{{ m }}</span
            >
          </div>
        </div> -->
      </div>
      <div class="mb-3">
        <label class="form-label">Note <span class="text-danger">*</span></label>
        <textarea class="note-textarea form-control" v-model="form_data.note"></textarea>
        <!-- <div class="" v-if="error">
          <div class="" v-for="(message, index) in error_message" :key="index">
            <span
              class="text-danger small"
              v-if="index === 'note_text'"
              v-for="(m, ind) in message"
              :key="ind"
              >{{ m }}</span
            >
          </div>
        </div> -->
      </div>
      <div class="ic-btns-notes mt-3">
        <button class="ic-note-btn ic-btn-bl" @click="cancelNote">
          Cancel
        </button>
        <button class="ic-note-btn ic-btn" @click="saveNote">Save Note</button>
      </div>
    </div>
    <div class="ic-all-note-show">
      <!-- <div class="ic-all-note-select">
                <select class="selectpicker">
                    <option value="0">All Notes</option>
                    <option value="1">Notes 1</option>
                </select>
                <select class="selectpicker">
                    <option value="0">Most Recent Note</option>
                    <option value="1">Notes 1</option>
                </select>
            </div> -->
      <ul class="ic-note-select">
        <li v-for="(item, index) in notes.reverse()" :key="index">
          <div class="edit-deleted-text">
            <p class="note-title">{{ index + 1 }}. {{ item.title }}</p>
            <div class="ic-edit-deleted">
              <!--                            <a href="#" class="date">10-Apr-2023, 05:30 PM</a>-->
              <a href="#" class="date">{{ item.created_at }}</a>
              <!--                            <a href="#" class="pencil"><i class="ri-download-line"></i></a>-->
              <!-- <a href="#" class="pencil" @click="activeUpdateNoteModal(note.id)"
                ><i class="ri-pencil-fill"></i
              ></a> -->
              <a href="#" class="deleted" @click="activeDeleteNoteModal(item.id)"><i class="ri-delete-bin-line"></i></a>
            </div>
          </div>
          <div class="ic-notetext">
            <p>
              {{ item.note }}
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "StudentNoteComponent",
  props: ["user_id", "course_id"],
  data() {
    return {
      notes: [],
      update_modal_show: false,
      delete_modal_show: false,
      error: false,
      error_message: [],
      form_data: {
        user_id: this.user_id,
        course_id: this.course_id,
        note: "",
        title: "",
      },
    };
  },
  created() {
    this.getNotes();
  },
  methods: {
    async getNotes() {
      await axios
        .get(`/student/note/get-all-notes/${this.user_id}/${this.course_id}`)
        .then((response) => {
          console.log(response);
          if (response.data.status === "success") {
            this.notes = response.data.notes;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    async saveNote() {
      await axios
        .post("/student/post-note", this.form_data)
        .then((response) => {
          if (response.data.status === 422) {
            this.error = true;
            this.error_message = response.data.messages;
            console.log(this.error_message);
          }
          if (response.data.status === "success") {
            this.form_data.note = "";
            this.form_data.title = "";
            this.notes.push(response.data.note);
          }
        })
        .catch((error) => {
          console.log(error.status);
        });
    },
    cancelNote() {
      this.form_data.note = "";
      this.form_data.title = "";
    },
    activeUpdateNoteModal(id) { },
    async updateNote() {
      await axios
        .put()
        .then((response) => {
          console.log(response.data.status);

          if (response.status == "success") {
            this.notes.push(response.note);
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    activeDeleteNoteModal(note_id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          this.deleteNote(note_id);
        }
      });
    },
    async deleteNote(note_id) {
      await axios
        .delete(`/student/delete-note/${note_id}`)
        .then((response) => {
          if (response.status === 200) {
            // Remove the deleted note from the local notes array
            this.notes = this.notes.filter((item) => item.id !== note_id);

            // Show success message with toastr
            this.$toastr.success('Note deleted successfully');
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style scoped>
.note_complete_text {
  -webkit-text-decoration-line: line-through;
  text-decoration-line: line-through;
}

.note-textarea {
  height: 200px;
}
</style>
