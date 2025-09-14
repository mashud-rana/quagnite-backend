function makeDeleteRequest(event, id) {
    event.preventDefault();
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
            if ($("#delete-form-" + id).length > 0) {
                let form_id = $("#delete-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#delete-form-" + id);
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

function makeDeleteRequestCM(event, id) {
    event.preventDefault();
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
            if ($("#delete-form-cm-" + id).length > 0) {
                let form_id = $("#delete-form-cm-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#delete-form-cm-" + id);
                $(form_id).submit();
            }
        }
    });
}


// accept application sweet alert pop-up
function makeAcceptRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, accpet it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#accept-form-" + id).length > 0) {
                let form_id = $("#accept-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#accept-form-" + id);
                $(form_id).submit();
            }
        }
    });
}

// Spoof Login
function makeLoginRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You want to login to this User Account!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Do it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#login-form-" + id).length > 0) {
                let form_id = $("#login-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#login-form-" + id);
                $(form_id).submit();
            }
        }
    });
}


function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

$(document).ready(function () {
    $('.select2').select2({
        placeholder: 'Please select'
    }
    );
});

// notification read ajax
$(document).ready(function () {
    $(".notification-item").on("click", function (event) {
        event.preventDefault();

        var notificationId = $(this).data("notification-id");
        var url = $(this).data("url");

        // Make an AJAX call to mark the notification as read
        $.ajax({
            url: '/markasread/' + notificationId,
            type: 'GET',
            success: function (response) {

                window.location.href = url;
            },
            error: function (xhr) {
                console.error(xhr);
            }
        });
    });
});



function makeChangeStatus(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You want change the status!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Change it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#status-form-" + id).length > 0) {
                let form_id = $("#status-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#status-form-" + id);
                $(form_id).submit();
            }
        }
    });
}
function submitReviewerForm(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You want to add this reviewer!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes!",
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('reviewer-form-' + id);
            if (form) {
                form.submit();
            }
        }
    });
}

