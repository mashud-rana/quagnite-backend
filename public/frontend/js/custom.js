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

// global search 
$(document).ready(function () {
    var resultList = $('#search-results-list');
    var noResults = $('#no-results');
    var liveSearch = $('#live-search');

    $(document).on('click', function (event) {
        // Close search results when clicking outside the search input
        if (!liveSearch.is(event.target) && liveSearch.has(event.target).length === 0) {
            resultList.empty();
            noResults.hide();
        }
    });

    liveSearch.on('input', function () {
        var query = $(this).val().trim();

        // Clear search results if the input is empty
        if (query === '') {
            resultList.empty();
            noResults.hide();
            return;
        }

        $.ajax({
            url: '/global-search',
            method: 'GET',
            data: { q: query },
            success: function (data) {
                displayResults(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    function displayResults(results) {
        resultList.empty();

        if (results.length > 0) {
            $.each(results, function (index, result) {
                resultList.append('<li><a href="' + result.url + '"><span><p>' + result.title + '</p></span><i class="ri-arrow-go-back-line"></i></a></li>');
            });
            noResults.hide();
        } else {
            noResults.show();
        }
    }
});