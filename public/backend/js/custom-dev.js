// Delete sweet alert pop-up
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
}

// Cancel session request sweet alert pop-up
function makeCancelSessionRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, reject it!",
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

// reject application sweet alert pop-up
function makeRejectRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, reject it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#reject-form-" + id).length > 0) {
                let form_id = $("#reject-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#reject-form-" + id);
                $(form_id).submit();
            }
        }
    });
}

// pending application sweet alert pop-up
function makePendingRequest(event, id) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#02a499",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, pending it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if ($("#pending-form-" + id).length > 0) {
                let form_id = $("#pending-form-" + id);
                $(form_id).submit();
            } else {
                let form_id = $("#pending-form-" + id);
                $(form_id).submit();
            }
        }
    });
}

// Capitalize the first letter of a word
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

// Show the all error messeage with sweet alert toast message
function showValidationError(err) {
    let error_string = '<div class="error-sa-v text-left">';
    for (const [key, value] of Object.entries(err.responseJSON.errors)) {
        error_string = error_string + value[0] + "<br>";

        if (value[1] != "undefined" && value[1] != undefined) {
            error_string = error_string + value[1] + "<br>";
        }
    }
    error_string = error_string + "<div>";

    Toast.fire({
        icon: "error",
        html: error_string,
    });
}

(function ($) {
    ("use strict");

    /*========================================
   Tagify
   ========================================*/

    var input = document.querySelector(".experience-tag");
    // init Tagify script on the above inputs
    var tagify = new Tagify(input, {
        whitelist: [
            "Graphic Design",
            "Web Design",
            "Laravel",
            "Php",
            "Javascript",
        ],
        dropdown: {
            classname: "tags-look",
            enabled: 0,
            closeOnSelect: false,
        },
        originalInputValueFormat: (valuesArr) =>
            valuesArr.map((item) => item.value).join(","),
    });

    var input = document.querySelector(".study-tag");
    // init Tagify script on the above inputs
    var tagify = new Tagify(input, {
        whitelist: [
            "Graphic Design",
            "Web Design",
            "Laravel",
            "Php",
            "Javascript",
        ],
        dropdown: {
            classname: "tags-look",
            enabled: 0,
            closeOnSelect: false,
        },
        originalInputValueFormat: (valuesArr) =>
            valuesArr.map((item) => item.value).join(","),
    });

    var input = document.querySelector(".interest-tag");
    // init Tagify script on the above inputs
    var tagify = new Tagify(input, {
        whitelist: [
            "Design",
            "Reading",
            "Travelling",
            "Dancing",
            "Playing",
            "Gardening",
        ],
        dropdown: {
            classname: "tags-look",
            enabled: 0,
            closeOnSelect: false,
        },
        originalInputValueFormat: (valuesArr) =>
            valuesArr.map((item) => item.value).join(","),
    });
})(jQuery);
