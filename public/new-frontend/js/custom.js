function makeCourseEnrolRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You want to enroll this course!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, confirm it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#enroll-form-" + id).length > 0) {
                let form_id = $("#enroll-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#enroll-form-" + id);
                $(form_id).submit();
            }
        }
    });
    /*swal({
        title: "Are you sure?",
        text: "You will not be able to recover!",
        buttons: {
            cancel: {
                text: "Cancel",
                value: null,
                visible: true,
                className: "",
                closeModal: true
            },
            confirm: {
                text: "Yes, delete it!",
                value: true,
                visible: true,
                className: "",
                closeModal: false
            }
        },
        icon: "warning",
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            if ($("#delete-form-action-" + id).length > 0) {
                let form_id = $("#delete-form-action-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#delete-form-" + id);
                $(form_id).submit();
            }
        }
    });*/
}
