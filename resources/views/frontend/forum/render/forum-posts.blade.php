<div class="forms-list-part" id="loadDataContainer">
    @foreach ($forumPosts as $post)
        <div class="forms-list">
            <div class="ic-form-body">
                <div class="forms-list--right">
                    <h4 class="fw-500">{{ $post->title }}</h4>
                    <p class="comment-text"> {!! substr(strip_tags($post->description), 0, 120) . '...' !!}
                        <a href="{{ route('forum.forumPostDetails', $post->uuid) }}">Read
                            More</a>
                    </p>
                </div>
                <div class="forums-comments">
                    <ul>
                        <li>
                            <a href="{{ route('forum.forumPostDetails', $post->uuid) }}">
                                <div class="icon-circle share">
                                    <i class="ri-share-forward-line"></i>
                                </div>
                            </a>

                            <p>Answer</p>
                            {{-- <p class="message-conversation">
                                                {{ $post->comments_count }} Comments
                                            </p> --}}
                        </li>
                        <li>
                            <div class="icon-circle">
                                <i class="ri-eye-line"></i>
                            </div>
                            <p class="message-conversation">
                                {{ $post->seen }} Views
                            </p>
                        </li>
                        <li>
                            <div class="icon-circle arrows">
                                <i class="ri-arrow-drop-up-fill"></i>
                                <i class="ri-arrow-drop-down-fill"></i>
                            </div>
                            <p class="message-conversation">
                                {{ $post->votes_sum_vote ?? 0 }} Votes
                            </p>
                        </li>

                    </ul>



                </div>
            </div>
            <div class="bottom-info">
                <div class="avatar">
                    <img src="{{ getStoreFile($post->user->avatar, $post->user->storage_type) }}" class="img-fluid" alt="images">
                </div>
                <div class="list-paragraph">
                    <p>Post from {{ $post->user->first_name }} Asked {{ $post->created_at->diffForHumans() }} in <a
                            href="#">{{ $post->forumCategory->name }}</a></p>
                </div>
                {{-- <div class="tags">
                                    <span class="warnnig">Important</span>
                                    <span class="success">How To</span>
                                    <span class="danger">General</span>
                                </div> --}}
            </div>
        </div>
    @endforeach
</div>
@if ($forumPosts->hasMorePages())
    <div class="ic-load-more">
        <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $forumPosts->nextPageUrl() }}"> Load
            more </button>
    </div>
@endif
