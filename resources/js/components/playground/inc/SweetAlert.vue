<template>
    <div>
        <a href="#" class="bg-red" @click="confirmAction">
            <slot>
                <i class="ri-close-fill"></i>
            </slot>
        </a>
    </div>
</template>

<script>
import Swal from 'sweetalert2';

export default {
    props: {
        url: {
            type: String,
            required: true
        },
        confirmText: {
            type: String,
            default: "Are you sure you want to proceed?"
        },
        confirmButtonText: {
            type: String,
            default: "Yes, do it!"
        },
        successCallback: {
            type: Function,
            required: true
        }
    },
    methods: {
        confirmAction() {
            Swal.fire({
                title: 'Are you sure?',
                text: this.confirmText,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: this.confirmButtonText
            }).then((result) => {
                if (result.isConfirmed) {
                    this.successCallback(this.url);
                }
            });
        }
    }
}
</script>

<style scoped>
.bg-red {
    background-color: red;
}
</style>