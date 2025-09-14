$(document).ready(function () {
    $(document).on("click", ".bookSchedule", function () {
        let hourly_rate = $(this).data("hourly_rate");
        let booking_coach_user_id = $(this).data("booking_coach_user_id");

        $(".bookingDate").val("");
        $(".appendDayAndTime").html("");
        $(".hourly_fee").val(hourly_rate);
        $(".hourly_rate").val('$ '+hourly_rate+' / hour');
        $(".booking_coach_user_id").val(booking_coach_user_id);

        let getOffDaysRoute = $(this).data("get_off_days_route");

        $.ajax({
            type: "GET",
            url: getOffDaysRoute,
            datatype: "json",
            success: function (response) {

                const dateArray = response.days.map(Number);

                $(".appendDatePicker").html(
                    ' <input type="text" class="bookingDate form-control" id="datepicker" autocomplete="off" placeholder="Select Date">\n'
                );

                $("#datepicker").datepicker({
                    dateFormat: "dd-mm-yy",
                    minDate: new Date(),
                    beforeShowDay: (dt) => {

                        return [dateArray.includes(dt.getDay()) ? true : false];
                    },
                });
            },
            error: function (error) {
                console.log(error);
                toastr.error('Somethings went wrong!')
            },
        });
    });

    $(document).on("change", ".bookingDate", function () {
        let bookingDate = $(".bookingDate").val();
        let user_id = $(".booking_coach_user_id").val();
        let getCoachBookingTimeRoute = $(".getCoachBookingTimeRoute").val();
        $.ajax({
            type: "GET",
            url: getCoachBookingTimeRoute,
            data: { user_id: user_id, bookingDate: bookingDate },
            datatype: "json",
            success: function (response) {
                // toastr.options.positionClass = "toast-bottom-right";

                // if (response.status == 404) {
                //     toastr.error(response.msg);
                // }

                $(".appendDayAndTime").html(response);
            },
            error: function (error) {
                console.log(error);
                toastr.error('Somethings went wrong!')
            },
        });
    });
});
