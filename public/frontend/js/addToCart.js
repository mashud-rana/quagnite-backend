const addToCartEvent = () => {
    $('.addToCart').on('click', function (){
        let course_id = $(this).data('course_id');
        let bootcamp_id = $(this).data('bootcamp_id');
        let ebook_id = $(this).data('ebook_id');
        let exam_id = $(this).data('exam_id');
        let api_plan_id = $(this).data('api_plan_id');
        let api_plan_type = $(this).data('api_plan_type');
        let subscription_id = $(this).data('subscription_id');
        let subscription_type = $(this).data('subscription_type');
        let coaching_slot_id = $('.coaching_slot_id').val();
        let coaching_date = $('.bookingDate').val();
        let route = $(this).data('route');

        $.ajax({
            type: "POST",
            url: route,
            data: {
                'course_id': course_id,
                'bootcamp_id': bootcamp_id,
                'ebook_id': ebook_id,
                'exam_id': exam_id,
                'api_plan_id': api_plan_id,
                'api_plan_type': api_plan_type,
                'subscription_id': subscription_id,
                'subscription_type': subscription_type,
                'coaching_slot_id': coaching_slot_id,
                'coaching_date': coaching_date,
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            datatype: "json",
            success: function (response) {
                toastr.options.positionClass = 'toast-top-right';

                if (response.status == 401 || response.status == 402 || response.status == 404 || response.status == 409){
                    toastr.error(response.msg)
                } else if(response.status == 200) {
                    $('.cartQuantity').text(response.cart_count)
                    toastr.success(response.msg)
                }
            },
            error: function (error) {
                if (error.status == 401){
                    toastr.error(error.msg)
                }
                if (error.status == 403){
                    toastr.error(error.msg)
                }

            },
        });
    })
}

addToCartEvent();



