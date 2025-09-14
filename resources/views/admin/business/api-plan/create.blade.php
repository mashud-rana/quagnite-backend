@extends('admin.layouts.master')

{{-- @push('styles')
    <style>
        .input_discount_box1 {
            display: none;
        }
    </style>
@endpush --}}

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.business.api-plans.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Api Plan Title <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Title"
                                value="{{ old('title') }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Subscription Type <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="monthly" value="{{ API_MONTHLY }}" name="type"
                                    class="form-check-input" checked="">
                                <label class="custom-control-label" for="monthly">Monthly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="yearly" value="{{ API_YEARLY }}" name="type"
                                    class="form-check-input">
                                <label class="custom-control-label" for="yearly">Yearly</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Api Call Limit <span class="error">*</span></label>
                            <input name="call_limit" type="number" class="form-control" required=""
                                placeholder="Call Limit" value="{{ old('call_limit') }}">
                            @error('call_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required="" placeholder=""
                                value="{{ old('price') }}">
                            @error('price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">Price Per Year </label>
                            <input name="per_year" type="text" class="form-control" required="" placeholder="Per Year"
                                value="{{ old('per_year') }}">
                            @error('per_year')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label> <br>
                            <textarea name="desc" class="form-control">{{ old('desc') }}</textarea>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label mb-2 w-100">Discount <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="0" name="is_discount"
                                    class="form-check-input" checked>
                                <label class="custom-control-label" for="status_no">No</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_yes" value="1" name="is_discount"
                                        class="form-check-input">
                                    <label class="custom-control-label" for="status_yes">Yes</label>
                                </div>
                            </div>
                        </div> --}}
                        {{--
                        <div class="input_discount_box1">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label>
                                <select class="form-control select2" name="discount_type">
                                    <option selected disabled>Select Discount Type</option>
                                    <option value="{{ GC::DISCOUNT_FIXED }}">Fixed
                                    </option>
                                    <option value="{{ GC::DISCOUNT_PERCENTAGE }}">Percentage</option>
                                </select>
                                @error('discount_type')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discount</label>
                                <input name="discount" type="number" class="form-control" placeholder="Discount"
                                    value="{{ old('discount') }}">
                                @error('discount')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" value="{{ ACTIVE }}" name="status"
                                    class="form-check-input" checked="">
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="{{ INACTIVE }}" name="status"
                                    class="form-check-input">
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.subscriptions.index') }}">
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
