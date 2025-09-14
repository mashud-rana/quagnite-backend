<div class="row consultation-modal-schedule-list-wrap ">
    <div class="col-md-3 col-sm-3">
        <h6 class="font-17 font-semi-bold color-heading consultation-schedule-day">{{ @$bookingDay }}:</h6>
    </div>
    <div class="col-md-9 col-sm-9">
        <div class="row g-2">
            @forelse($slots as $slot)
                <div class="col-sm-12 col-md-12">
                    <div class="time-slot-item">
                        <input type="radio" name="time" class="btn-check d-none" data-item="{{ $slot }}"
                            value="{{ $slot->time }}" id="checkbox{{ $slot->id }}" autocomplete="off">
                        <label class="btn ic-time-btn" for="checkbox{{ $slot->id }}">{{ $slot->time }}</label>
                    </div>
                </div>
            @empty
                <div class="col-sm-12 col-md-12">
                    <div class="time-slot-item">
                        <span>No Schedule Found</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>


<div class="modal-footer border-0 d-none meetingDetails">
    <p class="font-medium mb-1">Your Meeting Details</p>
    <p class="font-16 mb-1"><b class="color-deep-gray-dark">Meeting Date & Time:</b> <span
            class="meetingDateTime gray-dark"></span></p>
    <p class="font-16 mb-1"><b class="color-deep-gray-dark">Total Duration:</b> <span
            class="meetingDuration gray-dark"></span></p>
    <p class="font-16 mb-1"><b class="color-deep-gray-dark">Total Cost:</b> $ <span
            class="meetingCost gray-dark"></span>
    </p>
    <input type="hidden" class="coaching_slot_id">
</div>

<script>
    $(document).ready(function() {
        $("input[name='time']").click(function() {
            // Show add to cart
            $('.addToCart').removeClass('d-none');
            // Get time
            let time = $("input[name='time']:checked").val();
            let duration = $(this).data('item').duration;
            let hour_duration = $(this).data('item').hour_duration;
            let minute_duration = $(this).data('item').minute_duration;
            let hourly_fee = $('.hourly_fee').val();
            let minuteCost = 0;
            if (minute_duration > 0) {
                minuteCost = (parseFloat(hourly_fee) / (60 / parseFloat(minute_duration)));
            }

            let cost = ((parseFloat(hour_duration) * parseFloat(hourly_fee)) + minuteCost).toFixed(2)
            let bookingDate = $('.bookingDate').val();

            $('.meetingDetails').removeClass('d-none')
            $('.meetingDetails').addClass('d-block')

            $('.meetingDateTime').html(bookingDate + ' | ' + time)
            $('.meetingDuration').html(duration)

            $('.meetingCost').html(cost)
            $('.coaching_slot_id').val($(this).data('item').id)
        });
    });
</script>
