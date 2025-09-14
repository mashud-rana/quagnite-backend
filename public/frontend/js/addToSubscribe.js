const addToSubscribeEvent = () => {
    $('.addToSubscribe').on('click', function (event) {

        event.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You want to Subscribe this item!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#02a499",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, subscribe it!",
        }).then((result) => {
            if (result.isConfirmed) {

                subscribeItem(this);
            }
        });


    })
}

const subscribeItem = (element) => {

    let course_id = $(element).data('course_id');
    let bootcamp_id = $(element).data('bootcamp_id');
    let ebook_id = $(element).data('ebook_id');
    let exam_id = $(element).data('exam_id');
    let playground_id = $(element).data('playground_id');
    let route = $(element).data('route');

    $.ajax({
        type: "POST",
        url: route,
        data: {
            'course_id': course_id,
            'bootcamp_id': bootcamp_id,
            'ebook_id': ebook_id,
            'exam_id': exam_id,
            'playground_id': playground_id,
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        datatype: "json",
        success: function (response) {
            toastr.options.positionClass = 'toast-top-right';

            if (response.status == 401 || response.status == 402 || response.status == 404 || response.status == 409) {
                toastr.error(response.msg)
            } else if (response.status == 200) {
                window.location.href = response.url;
                toastr.success(response.msg)
            }
        },
        error: function (error) {
            if (error.status == 401) {
                toastr.error(error.msg)
            }
            if (error.status == 403) {
                toastr.error(error.msg)
            }

        },
    });
}

addToSubscribeEvent();



