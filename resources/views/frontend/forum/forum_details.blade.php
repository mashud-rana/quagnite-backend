@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/frontend') }}/images/forums-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Our Forum</span>
                        <h1 class="black pb-15 ic-inner-heading">Forum Listed Page</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('forum.askQuestion') }}" class="ic-btn">Ask The Community.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/forum/forums.png') }}" class="img-fluid" alt="forums">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ebook start -->
    <section class="ic__forumsDetails--part ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/forum/forums-section-bg.png') }})">
        <div class="container">
            <!-- forum start -->
            <div class="ic-single-ticket ic-forums-singles">
                <div class="single-ticket-header">
                    <div class="forum-details-header">
                        <img src="{{ $forumPost->user->avatar_url }}" class="img-fluid" alt="images">
                        <div class="text-forums-aother">
                            <h4>{{ $forumPost->user->full_name }}</h4>
                            <span><i class="ri-reply-fill"></i> Post from Author <span><i
                                        class="ri-checkbox-blank-circle-fill"></i>{{ $forumPost->created_at->diffForHumans() }}</span></span>
                        </div>
                    </div>
                    @if (Auth::check())
                        <div class="ic-upvote">
                            <button id="upvote" onclick="doingVote(event, 'up')"><i
                                    class="ri-arrow-up-s-fill"></i></button>
                            <p id="voteCount">{{ $voteCount }}</p>
                            <button id="downvote" onclick="doingVote(event, 'down')"><i
                                    class="ri-arrow-down-s-fill"></i></button>
                        </div>
                    @endif
                </div>
                <div class="single-ticket-body">
                    <p>{!! $forumPost->description !!}</p>

                    <div class="ic-ticket-descussion">
                        @foreach ($forumPostComments ?? [] as $forumPostComment)
                            <div class="ic-ticket admin">
                                <div class="ic-ticket-avatar">
                                    <div>
                                        <img src="{{ $forumPostComment->user->avatar_url }}" alt="images" class="avatar">
                                    </div>
                                    <div>
                                        <p>{{ $forumPostComment->user->full_name }}</p>
                                        <span>{{ $forumPostComment->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <p>{!! $forumPostComment->comment !!}</p>
                                <div class="ic-add-users">
                                    @if (@Auth::user())
                                        <a class="replyBtn" data-bs-toggle="modal" data-bs-target="#commentReplyModal"
                                            data-parent_id="{{ $forumPostComment->id }}">
                                            <i class="ri-reply-fill"></i> Reply</a>
                                    @endif
                                </div>
                            </div>
                            <div class="ic-massage-reply-hits">
                                @foreach ($forumPostComment->commentReplies as $forumPostCommentReply)
                                    <div class="ic-ticket user">
                                        <div class="ic-ticket-avatar">
                                            <div>
                                                <img src="{{ $forumPostCommentReply->user->avatar_url }}" alt="images"
                                                    class="avatar">
                                            </div>
                                            <div>
                                                <p>{{ $forumPostCommentReply->user->full_name }}</p>
                                                <span>{{ $forumPostCommentReply->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                        <p>{!! $forumPostCommentReply->comment !!}</p>

                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        @if (@Auth::user())
                            {{-- discussion replay --}}
                            <div class="ic-discussion-ticket">
                                <h6>Reply Suggestions</h6>

                                <form action="{{ route('forum.forumPostComment.store') }}" method="post"
                                    class="send-message">
                                    @csrf
                                    <input type="hidden" name="forum_post_id" value="{{ $forumPost->id }}">
                                    <div>
                                        {{-- <input id="inputComment" type="hidden" name="comment" value="">
                                        <trix-editor class="trix-editor" input="inputComment"></trix-editor> --}}
                                        <textarea name="comment" style="height: 200px;" id="" class="form-control"
                                            placeholder="Type here your wise suggestion"></textarea>
                                        <button type="submit" class="ic-btn-simple mt-2">Reply</button>
                                    </div>
                                </form>

                                {{-- <form action="#">
                                <textarea name="" id="" class="form-control"  placeholder="Type here your wise suggestion"></textarea>
                                <div class="pt-3 d-flex gap-3 justify-content-center">
                                    <a href="#" class="ic-btn danger">Cancel</a>
                                    <button class="ic-btn-simple">Reply</button>
                                </div>
                            </form> --}}
                            </div>
                            {{-- discussion replay --}}
                        @endif
                    </div>
                </div>
            </div>
            <!-- forum end -->
        </div>
    </section>
    <!-- ebook end -->

    <!-- Reply Modal -->
    <div class="modal fade" id="commentReplyModal" tabindex="-1" aria-labelledby="writeReviewModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reply</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('forum.forumPostCommentReply.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="parent_id" class="parent_id">
                    <input type="hidden" name="forum_post_id" class="forum_post_id" value="{{ $forumPost->id }}">
                    <div class="modal-body">
                        <input id="inputTrix" type="hidden" name="comment" value="{{ old('comment') }}">
                        <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <button type="button" class="ic-btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="ic-btn">Reply</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script>
        'use strict'

        $(document).on('click', '.replyBtn', function() {
            let parent_id = $(this).data('parent_id');
            $('.parent_id').val(parent_id)
        });

        const doingVote = (event, data) => {

            const URL = '{{ route('forum.vote.place') }}';
            const forumId = '{{ $forumPost->id }}';
            let vote;

            if (data === 'up') {
                vote = 1;
            }

            if (data === 'down') {
                vote = -1;
            }

            axios.post(URL, {
                    forum_id: forumId,
                    vote: vote
                })
                .then(response => {
                    document.getElementById('voteCount').innerHTML = response.data;

                })
                .catch(error => {
                    // handle request
                    console.log(error);
                });
        }
    </script>
@endpush
