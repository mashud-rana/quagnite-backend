@if (count($blogs) > 0)
    <div class="justify-content-center row  row-cols-xl-3 row-cols-md-2 row-cols-1 g-xl-4 g-sm-3 g-2"
        id="loadDataContainer">
        @foreach ($blogs as $blog)
            <div class="col">
                <a href="{{ route('blog.details', $blog->slug) }}">
                    <div class="ic-latest-blog-item">
                        <div class="ic-item-image position-relative">
                            <p class="ic-event-bage">{{ $blog->category->name }}</p>
                            <img src="{{ $blog->image_path }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="ic-item-conetnt-wrapper">

                            <span class="ic-sub-title">{{ $blog->title }}
                            </span>
                            {!! str_limit($blog->details, $words = 70, $end = '...') !!}
                            <div class="ic-bloger-info">
                                <div class="img-box">
                                    <img src="{{ getStoreFile($blog->user->avatar, $blog->user->storage_type) }}"
                                        alt="">
                                </div>
                                <div class="bloger-details">
                                    <span class="name d-block">
                                        {{ $blog->user->full_name }}
                                    </span>
                                    <span class="designation">
                                        MCdns Learning
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    @if ($blogs->hasMorePages())
        <div class="ic-load-more">
            <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $blogs->nextPageUrl() }}"> Load
                more </button>
        </div>
    @endif
@else
    <p class="text-center"> No Blog Found!</p>
@endif
