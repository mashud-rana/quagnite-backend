@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- organization --}}
    <div class="ic-organization-main">
        <div>
            @include('common.api.partials.aside')
        </div>
        <div class="content-right">
            <div class="section-headers pt-0">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Credentials</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
                <div class="d-flex">
                    @if ($is_active_plan)
                        @if (count($apiKeys) == 0)
                            <form action="{{ route('api.generate.key') }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="ic-btn-simple">Create Credenttials</button>
                            </form>
                        @endif
                        <div class="d-flex">
                            <a href="#" class="text-nowrap ic-btn-simple" data-bs-toggle="modal"
                                data-bs-target="#review" data-api-plan-id="{{ $api_plan_id ?? '' }}">Write Review</a>
                        </div>
                    @else
                        <a href="{{ route('business.index') }}" class="ic-btn-simple">Purchase a Api Plan</a>
                    @endif
                </div>
            </div>
            <div class="mt-3">
                <table class="ic-tables">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($apiKeys))
                            @foreach ($apiKeys as $item)
                                @php
                                    $key = $item->api_key;
                                @endphp
                                <td>
                                    <p>API key</p>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('M j, Y') }}
                                </td>
                                <td>
                                    <button class="ic-my-buttons" data-bs-target="#exampleModal" data-bs-toggle="modal">Show
                                        Key</button>
                                    <form action="{{ route('api.generate.key') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="ic-my-buttons bg-info text-white">Regenerate
                                            key</button>
                                    </form>

                                </td>
                            @endforeach
                        @else
                            <td colspan="3"> No Key Found. Please create a credentials</td>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- organization --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">API Key</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Use this key in your application by passing it whith the <code>Bearer Token</code> Parameter.
                    </p>
                    <div class="form-group mt-3">
                        <div class="position-relative ic-copy-link">
                            <input type="text" class="form-control overflow-hidden" placeholder="Your API key"
                                value="{{ $key ?? '' }}">
                            <button type="button"> <i class="ri-file-copy-line"></i></button>
                        </div>
                    </div>
                    <button type="button" class="ic-btn-simple danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Review Modal -->
    <div class="modal fade" id="review" tabindex="-1" aria-labelledby="review" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('api.review.submit') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="api_plan_id" id="api_plan_id_input_in_modal" value="">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="review">Write a Review</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                            </div>
                        </div>
                        <div class="form-group ic-feedback-form">
                            <label for="#">Feedback</label>
                            <textarea name="comment" id="" class="form-control" placeholder="Please write your feedback here"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="ic-btn danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="ic-btn-simple">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('[data-bs-target="#review"]').on('click', function(event) {
                var apiPlanId = $(this).data('api-plan-id');
                var modal = $('#review');
                var form = modal.find('form');
                form.attr('action', "{{ route('api.review.submit') }}");
                form.find('#api_plan_id_input_in_modal').val(apiPlanId);

                // Clear previous values
                form.find('textarea[name="comment"]').val('');
                form.find('input[name="rating"]').prop('checked', false);

                // Fetch the existing review
                $.get(`/api-plan/${apiPlanId}/review`, function(data) {
                    if (data) {
                        form.find(`input[name="rating"][value="${data.rating}"]`).prop('checked',
                            true);
                        form.find('textarea[name="comment"]').val(data.comment);
                    }
                }).fail(function() {
                    console.error('Error fetching review.');
                });
            });
        });
    </script>
@endpush
