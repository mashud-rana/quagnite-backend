<div class="row g-3" id="loadDataContainer">
    @foreach ($ebooks as $ebook)
        <div class="col-lg-4 col-md-6">
            <div class="ic-ebookShow-items">
                <a href="{{ route('ebooks.show', $ebook->slug) }}">
                    <div class="overflow-hidden ebookShow-img">
                        <img src="{{ getStoreFile($ebook->image, $ebook->storage_type) }}" class="img-fluid w-100" alt="ebook items">
                    </div>
                    <div class="ic-content-ebookItems">
                        <span class="ebookNames">{{ $ebook->author_name }}</span>
                        <div class="ebookItems-tags">
                            <span>{{ $ebook->category->name }}</span>
                            {{-- <span>Learning</span>
                        <span>Data Since</span> --}}
                        </div>
                        <p class="ebook-title">{!! str_limit($ebook->title, $words = 60, $end = '...') !!}</p>
                    </div>
                </a>
                <div class="ebook-buttons">
                    @if ($has_activeSubscription)
                    <button data-ebook_id="{{ $ebook->id }}" data-route="{{ route('addToSubscribe') }}"
                        class="ic-btn-simple addToSubscribe">Subscribe Now</button>
                        @else
                    <button data-ebook_id="{{ $ebook->id }}" data-route="{{ route('addToCart') }}"
                        class="ic-btn-simple addToCart"><i class="ri-shopping-cart-2-line"></i> Add to cart</button>
                        @endif
                    <span>${{ $ebook->price }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if ($ebooks->hasMorePages())
    <div class="mt-5 text-center">
        <button id="BtnLoadMore" class="ic-btn-simple" data-next-page="{{ $ebooks->nextPageUrl() }}">Load
            More
            E-book</button>
    </div>
@endif
