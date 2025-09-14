<!--Header Start-->
<div class="ic-overlay"></div>
<header class="ic-main-header ">
    <div class="top-headers">
        <div class="container">
            <ul class="h-top">
                <li>
                    <a href="tel:{{ config('settings.s_phone') }}" class="h-social"><i
                            class="ri-phone-fill"></i>{{ config('settings.s_phone') }}</a>
                    <a href="mailto:{{ config('settings.s_email') }}" class="h-social"><i
                            class="ri-mail-line"></i>{{ config('settings.s_email') }}</a>
                </li>
                <li>
                    <p class="ic-become">
                        <a href="{{ route('auth.register') }}" class="h-become-btn">Become an Instructor </a>
                    </p>
                    {{-- <p class="ic-become">
                        <a href="#" class="h-become-btn">Partners</a>
                    </p> --}}
                    <p class="ic-become">
                        <a href="{{ route('all.courses') }}" class="h-become-btn">Resources</a>
                    </p>
                    <p class="ic-become">
                        <a href="{{ route('playground.index') }}" class="h-become-btn">SkillUp</a>
                    </p>
                    <p class="ic-become">
                        <a href="{{ route('business.index') }}" class="h-become-btn">FuseWare</a>
                    </p>
                    <p class="ic-become">
                        <a href="#" class="h-become-btn">LMS</a>
                    </p>

                </li>
            </ul>
        </div>
    </div>


    <div class="ic-bottom-navbar">
        <div class="container">
            <div class="ic-navbar-nav">
                <div class="ic-navbar-left">
                    <div class="ic-logos">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ getStoreFile(config('settings.site_logo')) }}" alt="">
                        </a>
                    </div>
                    <div class="ic-navbar-middle">
                        <div class="ic-catagories-menu">
                            <p><i class="ri-dashboard-line"></i> All Category</p>
                            <div class="ic-main-mega-menu">
                                <div class="ic-mega-catagories">
                                    <div class="ic-left-menu">
                                        <ul class="left-mega-nav">
                                            <li class="left-mega-nav-item">
                                                <a href="{{ route('all.courses') }}" class="ic-mega-link " data-link="Courses"><img
                                                        src="{{ asset('new-frontend/images/dev.png') }}"
                                                        alt="">
                                                    Courses <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                                <div class="ic-right-menu">
                                                    <div class="mega-content" id="Courses">
                                                        <ul class="mega-sub-menu">
                                                            @foreach ($menucategories['courseCategories']->chunk(7) as $chunk)
                                                                <li class="mega-sub-menu-li">
                                                                    <h5>Courses</h5>
                                                                    <ul class="mega-inner-sub-menu">

                                                                        @foreach ($chunk as $value)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('all.courses') }}">{{ $value->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="left-mega-nav-item">
                                                <a href="{{ route('all.bootcamps') }}" class="ic-mega-link " data-link="Bootcamps"><img
                                                        src="{{ asset('new-frontend/images/dev.png') }}"
                                                        alt="">
                                                    Bootcamps <i class="ri-arrow-right-s-line"></i></a>
                                                <div class="ic-right-menu">
                                                    <div class="mega-content " id="Bootcamps">
                                                        <ul class="mega-sub-menu">
                                                            @foreach ($menucategories['bootcampCategories']->chunk(7) as $chunk)
                                                                <li class="mega-sub-menu-li">
                                                                    <h5>Bootcamps</h5>
                                                                    <ul class="mega-inner-sub-menu">

                                                                        @foreach ($chunk as $value)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('all.bootcamps') }}">{{ $value->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="left-mega-nav-item">
                                                <a href="{{ route('front.allCoaches') }}" class="ic-mega-link " data-link="Coaches"><img
                                                        src="{{ asset('new-frontend/images/dev.png') }}"
                                                        alt="">
                                                    Coaches <i class="ri-arrow-right-s-line"></i></a>

                                                <div class="ic-right-menu">
                                                    <div class="mega-content " id="Coaches">
                                                        <ul class="mega-sub-menu">
                                                            @foreach ($menucategories['coachCategories']->chunk(7) as $chunk)
                                                                <li class="mega-sub-menu-li">
                                                                    <h5>Coaches</h5>
                                                                    <ul class="mega-inner-sub-menu">

                                                                        @foreach ($chunk as $value)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('front.allCoaches') }}">{{ $value->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="left-mega-nav-item">
                                                <a href="{{ route('ebooks') }}" class="ic-mega-link " data-link="Ebooks"><img
                                                        src="{{ asset('new-frontend/images/dev.png') }}"
                                                        alt="">
                                                    Ebooks <i class="ri-arrow-right-s-line"></i></a>
                                                <div class="ic-right-menu">
                                                    <div class="mega-content " id="Ebooks">
                                                        <ul class="mega-sub-menu">
                                                            @foreach ($menucategories['ebookCategories']->chunk(7) as $chunk)
                                                                <li class="mega-sub-menu-li">
                                                                    <h5>Ebooks</h5>
                                                                    <ul class="mega-inner-sub-menu">

                                                                        @foreach ($chunk as $value)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('ebooks') }}">{{ $value->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="left-mega-nav-item">
                                                <a href="{{ route('blog.index') }}" class="ic-mega-link " data-link="Blogs"><img
                                                        src="{{ asset('new-frontend/images/dev.png') }}"
                                                        alt="">
                                                    Blogs <i class="ri-arrow-right-s-line"></i></a>

                                                <div class="ic-right-menu">
                                                    <div class="mega-content " id="Blogs">
                                                        <ul class="mega-sub-menu">
                                                            @foreach ($menucategories['blogCategories']->chunk(7) as $chunk)
                                                                <li class="mega-sub-menu-li">
                                                                    <h5>Blogs</h5>
                                                                    <ul class="mega-inner-sub-menu">

                                                                        @foreach ($chunk as $value)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('blog.index') }}">{{ $value->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="ic-right-menu">
                                        <div class="mega-content active" id="Courses">
                                            <ul class="mega-sub-menu">
                                                @foreach ($menucategories['courseCategories']->chunk(7) as $chunk)
<li class="mega-sub-menu-li">
                                                        <h5>Courses</h5>
                                                        <ul class="mega-inner-sub-menu">

                                                            @foreach ($chunk as $value)
<li>
                                                                    <a href="#">{{ $value->name }}</a>
                                                                </li>
@endforeach
                                                        </ul>
                                                    </li>
@endforeach
                                            </ul>
                                        </div>
                                        <div class="mega-content " id="Bootcamps">
                                            <ul class="mega-sub-menu">
                                                @foreach ($menucategories['bootcampCategories']->chunk(7) as $chunk)
<li class="mega-sub-menu-li">
                                                        <h5>Bootcamps</h5>
                                                        <ul class="mega-inner-sub-menu">

                                                            @foreach ($chunk as $value)
<li>
                                                                    <a href="#">{{ $value->name }}</a>
                                                                </li>
@endforeach
                                                        </ul>
                                                    </li>
@endforeach
                                            </ul>
                                        </div>
                                        <div class="mega-content " id="Coaches">
                                            <ul class="mega-sub-menu">
                                                @foreach ($menucategories['coachCategories']->chunk(7) as $chunk)
<li class="mega-sub-menu-li">
                                                        <h5>Coaches</h5>
                                                        <ul class="mega-inner-sub-menu">

                                                            @foreach ($chunk as $value)
<li>
                                                                    <a href="#">{{ $value->name }}</a>
                                                                </li>
@endforeach
                                                        </ul>
                                                    </li>
@endforeach
                                            </ul>
                                        </div>
                                        <div class="mega-content " id="Ebooks">
                                            <ul class="mega-sub-menu">
                                                @foreach ($menucategories['ebookCategories']->chunk(7) as $chunk)
<li class="mega-sub-menu-li">
                                                        <h5>Ebooks</h5>
                                                        <ul class="mega-inner-sub-menu">

                                                            @foreach ($chunk as $value)
<li>
                                                                    <a href="#">{{ $value->name }}</a>
                                                                </li>
@endforeach
                                                        </ul>
                                                    </li>
@endforeach
                                            </ul>
                                        </div>
                                        <div class="mega-content " id="Blogs">
                                            <ul class="mega-sub-menu">
                                                @foreach ($menucategories['blogCategories']->chunk(7) as $chunk)
<li class="mega-sub-menu-li">
                                                        <h5>Blogs</h5>
                                                        <ul class="mega-inner-sub-menu">

                                                            @foreach ($chunk as $value)
<li>
                                                                    <a href="#">{{ $value->name }}</a>
                                                                </li>
@endforeach
                                                        </ul>
                                                    </li>
@endforeach
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="position-relative">
                            <div class="ic-search-btn">
                                <input type="text" id="live-search" name="q" placeholder="Search..."
                                    class="form-control" autocomplete="off">
                                <i class="ri-search-line"></i>
                            </div>
                            <div class="search-feild-drop-dwon">
                                <ul id="search-results-list"></ul>
                                {{-- no search result --}}
                                <div id="no-results" class="py-4 text-center bg-white rounded"
                                    style="display: none;">
                                    <svg width="40" height="40" viewBox="0 0 20 20" fill="none"
                                        fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M15.5 4.8c2 3 1.7 7-1 9.7h0l4.3 4.3-4.3-4.3a7.8 7.8 0 01-9.8 1m-2.2-2.2A7.8 7.8 0 0113.2 2.4M2 18L18 2">
                                        </path>
                                    </svg>
                                    <p>No results for "search"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ic-navbar-right">
                    {{-- <div class="ic-sidebar-top-func">
                        <a href="#">
                            <img src="https://mc-dns.test/new-frontend/images/main-logos.png" alt="">
                        </a>
                        <a href="#" class="close-sidebar-menu"><i class="ri-close-circle-line"></i></a>
                    </div> --}}
                    <div class="ic-navbar-menu">
                        <div class="ic-sidebar-top-func">
                            <a href="#">
                                <img src="https://mc-dns.test/new-frontend/images/main-logos.png" alt="">
                            </a>
                            <a href="#" class="close-sidebar-menu"><i class="ri-close-circle-line"></i></a>
                        </div>
                        <ul class="ic-navbar-menu-nav">
                            <li class="ic-navbar-menu-item">
                                <a href="#" class="ic-navbar-menu-link all-catagories-link">All Category <i
                                        class="ri-arrow-right-s-line"></i></a>
                                <ul class="ic-mobile-mega-menu">
                                    <li>
                                        <a href="{{ route('all.courses') }}" class="mobile-sub-mega-menu-link">Courses <i
                                                class="ri-arrow-right-s-line"></i></a>
                                        <ul class="sub-menu-mega">
                                            @foreach ($menucategories['courseCategories'] as $item)
                                                <li>
                                                    <a href="{{ route('all.courses') }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('all.bootcamps') }}" class="mobile-sub-mega-menu-link">Bootcamps<i
                                                class="ri-arrow-right-s-line"></i></a>
                                        <ul class="sub-menu-mega">
                                            @foreach ($menucategories['bootcampCategories'] as $item)
                                                <li>
                                                    <a href="{{ route('all.bootcamps') }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.allCoaches') }}" class="mobile-sub-mega-menu-link">Coaches
                                            <i class="ri-arrow-right-s-line"></i></a>
                                        <ul class="sub-menu-mega">
                                            @foreach ($menucategories['coachCategories'] as $item)
                                                <li>
                                                    <a href="{{ route('front.allCoaches') }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('ebooks') }}" class="mobile-sub-mega-menu-link">Ebooks<i
                                                class="ri-arrow-right-s-line"></i></a>
                                        <ul class="sub-menu-mega">
                                            @foreach ($menucategories['ebookCategories'] as $item)
                                                <li>
                                                    <a href="{{ route('ebooks') }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.index') }}" class="mobile-sub-mega-menu-link">Blogs<i
                                                class="ri-arrow-right-s-line"></i></a>
                                        <ul class="sub-menu-mega">
                                            @foreach ($menucategories['blogCategories'] as $item)
                                                <li>
                                                    <a href="{{ route('blog.index') }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="ic-navbar-menu-item">
                                <a href="{{ route('front.home') }}" class="ic-navbar-menu-link">Home</a>
                            </li>
                            <li class="ic-navbar-menu-item">
                                <a href="{{ route('courses') }}" class="ic-navbar-menu-link">Courses</a>
                            </li>
                            <li class="ic-navbar-menu-item">
                                <a href="{{ route('bootcamps') }}" class="ic-navbar-menu-link">Bootcamps</a>
                            </li>
                            <li class="ic-navbar-menu-item">
                                <a href="{{ route('front.coaches') }}" class="ic-navbar-menu-link">Coaching</a>
                            </li>
                            <li class="ic-navbar-menu-item">
                                <a href="#" class="ic-navbar-menu-link all-catagories-link">More
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="ic-dropdwon ">
                                    <li>
                                        <a href="{{ route('business.index') }}">Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('playground.index') }}">Playgrounds</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ebooks') }}">Ebook</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('forum.index') }}">Forum</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('exams.index') }}">Exam</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.index') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('event.index') }}">Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('all.wikis') }}">Wiki</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.help') }}">HelpDesk</a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">Exam</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('all.pricings') }}">Plan and Pricings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        {{-- <div class="mega-menu-mobile">
                            <ul class="mega-menu-nav" id="menu1">
                                <li class="mega-menu-items">
                                    <a href="#" class="mega-menu-links">DevOps <i class="ri-arrow-right-s-line"></i></a>
                                    <ul>
                                        <li>
                                            <h5>Machine Learning</h5>
                                            <div class="ic-mega-inner-link">
                                                <a href="#">Data Science</a>
                                                <a href="#">Deep Learning</a>
                                                <a href="#">Artificial Intelligence</a>
                                                <a href="#">Language Processing</a>
                                                <a href="#">Streaming</a>
                                                <a href="#">Natural Language Processing</a>
                                                <a href="#">Statistics</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-items">
                                    <a href="#" class="mega-menu-links">Cloud computing <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </li>
                                <li class="mega-menu-items">
                                    <a href="#" class="mega-menu-links">Linux System Engineer <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </li>
                                <li class="mega-menu-items">
                                    <a href="#" class="mega-menu-links">Azure Associate <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </li>
                                <li class="mega-menu-items">
                                    <a href="#" class="mega-menu-links">AWS Cloud Architect <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </li>
                                <li class="ic-navbar-menu-item">
                                    <a href="#" class="ic-navbar-menu-link">More <i
                                            class="ri-arrow-down-s-line"></i></a>
                                    <ul class="ic-dropdwon">
                                        <li>
                                            <a href="{{ route('business.index') }}">Business</a>
                        </li>
                        <li>
                            <a href="{{ route('forum.index') }}">Forum</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('all.wikis') }}">Wiki</a>
                        </li>
                        <li>
                            <a href="{{ route('ebooks') }}">Ebook</a>
                        </li>
                        <li>
                            <a href="{{ route('test-helpdesk') }}">HelpDesk</a>
                        </li>
                        <li>
                            <a href="#">Exam</a>
                        </li>
                        <li>
                            <a href="{{ route('all.pricings') }}">Plan and Pricings</a>
                        </li>
                        </ul>
                        </li>
                        </ul>
                    </div> --}}
                    </div>

                    <div class="ic-navbar-right-content">

                        @if (auth()->check())
                            @include('layouts.partials.nav-dropdown')
                            {{-- <div class="dropdown afterLogin ic-student-avatar">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ auth()->user()->avatar_url }}" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="avatar-account-infos">
                                <img src="{{ auth()->user()->avatar_url  }}" alt="">
                                <div>
                                    <p>{{ auth()->user()->full_name }}</p>
                                    <span>{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            @if (auth()->user()->user_type === 'admin')
                            <a class="dropdown-item" href="{{ route('admin.profile.info') }}">
                                <i class="ri-user-line"></i> My Profile
                            </a>
                            @else
                            <a class="dropdown-item" href="{{ route(auth()->user()->user_type . '.profile') }}">
                                <i class="ri-user-line"></i> My Profile
                            </a>
                            @endif
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route(auth()->user()->user_type . '.dashboard') }}">
                                <i class="ri-home-smile-2-line"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="dropdown-item  text-danger" href="javascript:void(0)">
                                    <i class="ri-shut-down-line"></i>
                                    Logout
                                </a>
                            </form>
                        </li>

                    </ul>
                </div> --}}
                        @else
                            <a href="{{ route('auth.login') }}" class="ic-login-profile-button">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 18.3453C13.9706 18.3453 18 14.3505 18 9.42265C18 4.49481 13.9706 0.5 9 0.5C4.02944 0.5 0 4.49481 0 9.42265C0 14.3505 4.02944 18.3453 9 18.3453ZM2.96402 14.023C1.97534 12.7494 1.38745 11.154 1.38745 9.42261C1.38745 5.2529 4.79698 1.87268 9.00284 1.87268C13.2087 1.87268 16.6182 5.2529 16.6182 9.42261C16.6182 11.1571 16.0282 12.755 15.0364 14.0298C14.5841 13.6223 14.0059 13.3278 13.2443 13.056C13.1305 13.0154 13.0138 12.9755 12.8682 12.9269L12.5136 12.8092C11.6511 12.5208 11.346 12.3375 11.275 12.1056C11.2726 12.0978 11.2687 12.0833 11.2634 12.0552C11.2327 11.8945 11.2397 11.7188 11.3027 11.5731C11.3399 11.4871 11.3966 11.4105 11.4816 11.3401C12.4381 10.4841 12.9202 9.51938 12.9202 8.20349C12.9202 5.91091 11.1109 4.16142 8.99714 4.16142C6.86884 4.16142 5.07406 5.88109 5.07406 8.20349C5.07406 9.51548 5.54368 10.452 6.466 11.3132C6.58467 11.4124 6.64426 11.485 6.68479 11.5612C6.76324 11.7087 6.77328 11.8796 6.73892 12.037C6.73646 12.0482 6.73441 12.0567 6.73313 12.062C6.73158 12.0685 6.73114 12.0703 6.73242 12.0669C6.66409 12.3075 6.38112 12.4803 5.58367 12.7504L5.17514 12.8871C5.00474 12.9445 4.86928 12.9915 4.7367 13.04C3.99151 13.3127 3.41521 13.6138 2.96402 14.023ZM3.90646 15.0328C5.25607 16.2386 7.043 16.9725 9.00284 16.9725C10.9595 16.9725 12.7438 16.241 14.0926 15.0387C13.7903 14.7723 13.3709 14.5601 12.7754 14.3476C12.6721 14.3108 12.564 14.2738 12.4268 14.228L12.0709 14.1099C10.7829 13.6791 10.2031 13.3308 9.95357 12.5154C9.93781 12.4669 9.91961 12.3978 9.90297 12.3108C9.82537 11.9049 9.84291 11.465 10.0302 11.032C10.152 10.7504 10.3393 10.4977 10.5735 10.3042C11.2333 9.71321 11.5356 9.10836 11.5356 8.20349C11.5356 6.67682 10.3538 5.53413 8.99714 5.53413C7.62317 5.53413 6.45868 6.6499 6.45868 8.20349C6.45868 9.10749 6.75399 9.69643 7.38221 10.2849C7.60804 10.4703 7.78377 10.6845 7.90948 10.9208C8.16092 11.3934 8.18958 11.8814 8.09219 12.3274C8.07225 12.4187 8.05033 12.4914 8.05025 12.4834C7.83225 13.286 7.26849 13.6304 6.03123 14.0494L5.62003 14.1871C5.46022 14.2408 5.33545 14.2841 5.21614 14.3278C4.6312 14.5418 4.21095 14.7605 3.90646 15.0328Z"
                                        fill="#272C37" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 18.3453C13.9706 18.3453 18 14.3505 18 9.42265C18 4.49481 13.9706 0.5 9 0.5C4.02944 0.5 0 4.49481 0 9.42265C0 14.3505 4.02944 18.3453 9 18.3453ZM2.96402 14.023C1.97534 12.7494 1.38745 11.154 1.38745 9.42261C1.38745 5.2529 4.79698 1.87268 9.00284 1.87268C13.2087 1.87268 16.6182 5.2529 16.6182 9.42261C16.6182 11.1571 16.0282 12.755 15.0364 14.0298C14.5841 13.6223 14.0059 13.3278 13.2443 13.056C13.1305 13.0154 13.0138 12.9755 12.8682 12.9269L12.5136 12.8092C11.6511 12.5208 11.346 12.3375 11.275 12.1056C11.2726 12.0978 11.2687 12.0833 11.2634 12.0552C11.2327 11.8945 11.2397 11.7188 11.3027 11.5731C11.3399 11.4871 11.3966 11.4105 11.4816 11.3401C12.4381 10.4841 12.9202 9.51938 12.9202 8.20349C12.9202 5.91091 11.1109 4.16142 8.99714 4.16142C6.86884 4.16142 5.07406 5.88109 5.07406 8.20349C5.07406 9.51548 5.54368 10.452 6.466 11.3132C6.58467 11.4124 6.64426 11.485 6.68479 11.5612C6.76324 11.7087 6.77328 11.8796 6.73892 12.037C6.73646 12.0482 6.73441 12.0567 6.73313 12.062C6.73158 12.0685 6.73114 12.0703 6.73242 12.0669C6.66409 12.3075 6.38112 12.4803 5.58367 12.7504L5.17514 12.8871C5.00474 12.9445 4.86928 12.9915 4.7367 13.04C3.99151 13.3127 3.41521 13.6138 2.96402 14.023ZM3.90646 15.0328C5.25607 16.2386 7.043 16.9725 9.00284 16.9725C10.9595 16.9725 12.7438 16.241 14.0926 15.0387C13.7903 14.7723 13.3709 14.5601 12.7754 14.3476C12.6721 14.3108 12.564 14.2738 12.4268 14.228L12.0709 14.1099C10.7829 13.6791 10.2031 13.3308 9.95357 12.5154C9.93781 12.4669 9.91961 12.3978 9.90297 12.3108C9.82537 11.9049 9.84291 11.465 10.0302 11.032C10.152 10.7504 10.3393 10.4977 10.5735 10.3042C11.2333 9.71321 11.5356 9.10836 11.5356 8.20349C11.5356 6.67682 10.3538 5.53413 8.99714 5.53413C7.62317 5.53413 6.45868 6.6499 6.45868 8.20349C6.45868 9.10749 6.75399 9.69643 7.38221 10.2849C7.60804 10.4703 7.78377 10.6845 7.90948 10.9208C8.16092 11.3934 8.18958 11.8814 8.09219 12.3274C8.07225 12.4187 8.05033 12.4914 8.05025 12.4834C7.83225 13.286 7.26849 13.6304 6.03123 14.0494L5.62003 14.1871C5.46022 14.2408 5.33545 14.2841 5.21614 14.3278C4.6312 14.5418 4.21095 14.7605 3.90646 15.0328Z"
                                        fill="#1F2029" />
                                </svg>


                                Login
                            </a>
                        @endif
                        <a href="{{ route('cart') }}" class="addToCart-header">
                            <i class="ri-shopping-cart-2-line"></i>
                            <span class="cartQuantity">{{ Cart::count() }}</span>
                        </a>
                    </div>

                    {{-- mobile logo --}}
                    <!-- <div class="ic-sidebar-top-func">
                        <a href="#" class="close-sideb-menu"><i class="ri-arrow-left-line"></i></a>
                        <a href="#" class="close-sidebar-menu"><i class="ri-close-circle-line"></i></a>
                    </div> -->

                    <button class="humbugger-menu"
                        onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                        aria-label="Main Menu">
                        <svg width="100" height="100" viewBox="0 0 100 100">
                            <path class="line line1"
                                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3"
                                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script src="{{ asset('/frontend/js/custom.js') }}"></script>
@endpush
