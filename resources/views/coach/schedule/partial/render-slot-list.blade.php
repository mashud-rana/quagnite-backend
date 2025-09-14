@forelse($slots as $slot)
    <div class="time-adds">
        <div class="times-plan position-relative">
            <input type="text" class="form-control" name="field_name[]" value="{{ $slot->time }}" disabled>
        </div>
        <button data-repeater-delete data-route="{{ route('coach.schedule.slot.delete', $slot->id) }}" type="button"
            class="deleted-time deleteTimeSlot"><i class="ri-delete-bin-line"></i></button>
    </div>
@empty
    <div class="time-adds">
        <div class="times-plan position-relative text-center">
            <span class="text-danger">No Record Found</span>
        </div>
    </div>
@endforelse

{{-- @forelse($slots as $slot)
<div class="col-sm-8 col-md-8">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="field_name[]" placeholder="Ex. 9:00 AM - 10:00 AM"
            value="{{ $slot->time }}" disabled>
        <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-light deleteTimeSlot"
            data-route="{{ route('coach.schedule.slot.delete', $slot->id) }}">
            <i class="ri-delete-bin-line"></i>
        </button>
    </div>
</div>
@empty
<div class="col-sm-12 col-md-12">
    <div class="input-group mb-3">
        <span>No Record Found</span>
    </div>
</div>
@endforelse --}}
