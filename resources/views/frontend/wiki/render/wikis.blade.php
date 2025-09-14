<div class="row g-2 g-lg-4 ic-ebook-main" id="loadDataContainer">
    @foreach ($wikis as $wiki)
        <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
            <div class="ic-wiki-items">
                <div class="ic-wiki-img">
                    <img src="{{ $wiki->image_path }}" class="img-fluid w-100" alt="mcdns">
                </div>
                <div class="ic-wiki-content">
                    <span class="wiki-names">{{ $wiki->category->name }}</span>
                    <div class="author">
                        <img src="https://mcdns-website-storage.s3.amazonaws.com/images/user_default.png"
                            alt="mcdns">
                        <span>By: {{ $wiki->user->full_name }}</span>
                    </div>
                    <p class="fs-18 black fw-500 pb-2">{{ $wiki->title }}</p>
                    <p class="fs-15 fw-300 pb-3 gray ic-para-text">{!! str_limit($wiki->details, $words = 70, $end = '...') !!}</p>
                    <div class="ic-wiki-btn">
                        <a href="{{ route('wiki.details', $wiki->slug) }}" class="ic-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if ($wikis->hasMorePages())
    <div class="ic-load-more">
        <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $wikis->nextPageUrl() }}"> Load
            more </button>
    </div>
@endif
