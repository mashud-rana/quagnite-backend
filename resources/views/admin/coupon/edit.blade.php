@extends('admin.layouts.master')
@push('styles')
@endpush
@php
    $couponTypes = config('constants');
@endphp
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.coupon.update', $coupon->id) }}" method="post">
                        @csrf @method('post')

                        <div class="mb-3">
                            <label class="form-label">Coupon Code <span class="error">*</span></label>
                            <input name="coupon_code" type="text" class="form-control" required=""
                                placeholder="Type Coupon Code" value="{{ old('coupon_code') ?? $coupon->coupon_code }}">
                            @error('coupon_code')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start Date <span class="error">*</span></label>
                            <input name="start_date" type="date" class="form-control" required=""
                                value="{{ old('start_date') ?? $coupon->start_date }}">
                            @error('start_date')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Date <span class="error">*</span></label>
                            <input name="end_date" type="date" class="form-control" required=""
                                value="{{ old('end_date') ?? $coupon->end_date }}">
                            @error('end_date')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Coupon Type</label>
                            <select class="form-control select2" name="coupon_type">
                                <option value="{{ GLOBAL_COUPON }}" @if (GLOBAL_COUPON == $coupon->coupon_type) selected @endif>Global
                                </option>
                                <option value="{{ API }}" @if (API == $coupon->coupon_type) selected @endif>API
                                </option>
                                <option value="{{ EXAM }}" @if (EXAM == $coupon->coupon_type) selected @endif>Exam
                                </option>
                                <option value="{{ COURSE }}" @if (COURSE == $coupon->coupon_type) selected @endif>
                                    Course</option>
                                <option value="{{ BOOTCAMP }}" @if (BOOTCAMP == $coupon->coupon_type) selected @endif>
                                    Bootcamp</option>
                                <option value="{{ EBOOK }}" @if (EBOOK == $coupon->coupon_type) selected @endif>Ebook
                                </option>
                                <option value="{{ COACH }}" @if (COACH == $coupon->coupon_type) selected @endif>Coach
                                </option>
                                <option value="{{ PLAYGROUND }}" @if (PLAYGROUND == $coupon->coupon_type) selected @endif>
                                    Playground</option>
                                <option value="{{ SUBSCRIPTION }}" @if (SUBSCRIPTION == $coupon->coupon_type) selected @endif>
                                    Subscription</option>
                            </select>
                            @error('coupon_type')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Discount Percentage <span class="error">*</span></label>
                            <input name="percentage" type="number" class="form-control" required="" placeholder="%"
                                value="{{ old('percentage') ?? $coupon->percentage }}">
                            @error('percentage')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Minimum Amount to Apply<span class="error">*</span></label>
                            <input name="minimum_amount" type="number" class="form-control" required="" placeholder=""
                                value="{{ old('minimum_amount') ?? $coupon->minimum_amount }}">
                            @error('minimum_amount')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Maximum use limit<span class="error">*</span></label>
                            <input name="maximum_use_limit" type="number" class="form-control" required=""
                                placeholder="" value="{{ old('maximum_use_limit') ?? $coupon->maximum_use_limit }}">
                            @error('maximum_use_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                    @if (ACTIVE == $coupon->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                    @if (INACTIVE == $coupon->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.coupon.index') }}">
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

@push('scripts')
@endpush
