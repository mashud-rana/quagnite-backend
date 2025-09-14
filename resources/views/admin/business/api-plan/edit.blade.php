@extends('admin.layouts.master')

{{-- @push('styles')
    @if ($plan->is_discount === 0)
        <style>
            .input_discount_box1 {
                display: none;
            }
        </style>
    @endif
@endpush --}}

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.business.api-plans.update', $plan->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Api Plan Title <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Title"
                                value="{{ $plan->title ?? old('title') }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Plan Type <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="monthly" value="{{ API_MONTHLY }}" name="type"
                                    class="form-check-input" @if (API_MONTHLY == $plan->type) checked @endif>
                                <label class="custom-control-label" for="monthly">Monthly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="yearly" value="{{ API_YEARLY }}" name="type"
                                    class="form-check-input" @if (API_YEARLY == $plan->type) checked @endif>
                                <label class="custom-control-label" for="yearly">Yearly</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Api Call Limit<span class="error">*</span></label>
                            <input name="call_limit" type="number" class="form-control" required=""
                                placeholder="Course Limit" value="{{ $plan->call_limit ?? old('call_limit') }}">
                            @error('call_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required="" placeholder=""
                                value="{{ $plan->price ?? old('price') }}">
                            @error('price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">Price Per Year </label>
                            <input name="per_year" type="text" class="form-control" required="" placeholder="Per Year"
                                value="{{ $plan->per_year ?? old('per_year') }}">
                            @error('per_year')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label> <br>
                            <textarea name="desc" class="form-control">{{ $plan->desc ?? old('desc') }}</textarea>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label mb-2 w-100">Discount <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="0" name="is_discount"
                                    class="form-check-input" @if ($plan->is_discount === 0) checked @endif>
                                <label class="custom-control-label" for="status_no">No</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_yes" value="1" name="is_discount"
                                        class="form-check-input" @if ($plan->is_discount === 1) checked @endif>
                                    <label class="custom-control-label" for="status_yes">Yes</label>
                                </div>
                            </div>
                        </div>

                        @php
                            $fixed_text = GC::DISCOUNT_FIXED;
                            $percentage_text = GC::DISCOUNT_PERCENTAGE;
                        @endphp

                        <div class="input_discount_box1">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label>
                                <select class="form-control select2" name="discount_type">
                                    <option disabled>Select Discount Type</option>
                                    <option value="{{ $fixed_text }}" @if ($plan->discount_type === $fixed_text) selected @endif>
                                        Fixed</option>
                                    <option value="{{ $percentage_text }}"
                                        @if ($plan->discount_type === $percentage_text) selected @endif>Percentage</option>
                                </select>
                                @error('discount_type')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discount</label>
                                <input name="discount" type="number" class="form-control" placeholder="Discount"
                                    value="{{ $plan->discount ?? old('discount') }}">
                                @error('discount')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                    @if (ACTIVE == $plan->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                    @if (INACTIVE == $plan->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect"
                                    href="{{ route('admin.business.api-plans.index') }}">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- @push('scripts')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('desc');

        $(document).ready(function() {
            $('input[name="is_discount"]').click(function() {
                var inputValue = $(this).attr("value");
                $(".input_discount_box1").hide();
                $(".input_discount_box" + inputValue).show();
            });
        });
    </script>
@endpush --}}
