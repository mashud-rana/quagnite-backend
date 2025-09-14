@extends('layouts.master')

@push('styles')
@endpush

@section('content')
<!-- {{-- banner part start --}} -->
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-7">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Contact Us</span>
                        <h1 class="black pb-15">Welcome To Contact Us</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of printing and typesetting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/help-center/help-center-banner.png') }}" class="img-fluid"
                            alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- banner part end --}} -->
<div class="ic-contact-section ic-section-space ic-bg-img "
    style="background-image: linear-gradient(0deg, rgba(247, 247, 247, 0.95), rgba(247, 247, 247, 0.95)), url({{ asset('/new-frontendv1/images/section-bg.png') }})">
    <div class="container">
        <!-- ic-heading -->
        <!-- <div class="ic-heading text-center mb-50">
            <div class="ic-badge bg-grey mb-25">CONTACT</div>
            <h3 class="fw-700 cl-black mb-20 ic-bio-title">
                GET IN TOUCH
            </h3>
        </div> -->


        <!-- ic-contact-wrapper -->
        <div class="ic-contact-wrapper">
            <!-- ic-contact-card-wrapper -->
            <div class="ic-contact-card-wrapper ic-section-space-bottom">
                <!-- ic-contact-card -->
                <div class="ic-contact-card">
                    <!-- ic-icon -->
                    <div class="ic-icon mb-20">
                        <svg width="28" height="33" viewBox="0 0 28 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 28.3499L21.425 20.9249C22.8933 19.4564 23.8933 17.5855 24.2983 15.5487C24.7034 13.5119 24.4954 11.4008 23.7006 9.48222C22.9059 7.56366 21.5601 5.92384 19.8334 4.77014C18.1067 3.61643 16.0767 3.00064 14 3.00064C11.9233 3.00064 9.89332 3.61643 8.16663 4.77014C6.43994 5.92384 5.09413 7.56366 4.29937 9.48222C3.50462 11.4008 3.29662 13.5119 3.70168 15.5487C4.10674 17.5855 5.10666 19.4564 6.57501 20.9249L14 28.3499ZM14 32.5919L4.45401 23.0459C2.56601 21.1579 1.28028 18.7524 0.759393 16.1337C0.238506 13.5149 0.50586 10.8005 1.52765 8.33373C2.54944 5.86694 4.27976 3.75854 6.49982 2.27515C8.71988 0.791757 11.33 0 14 0C16.67 0 19.2801 0.791757 21.5002 2.27515C23.7202 3.75854 25.4506 5.86694 26.4724 8.33373C27.4941 10.8005 27.7615 13.5149 27.2406 16.1337C26.7197 18.7524 25.434 21.1579 23.546 23.0459L14 32.5919ZM14 16.4999C14.7957 16.4999 15.5587 16.1838 16.1213 15.6212C16.6839 15.0586 17 14.2955 17 13.4999C17 12.7042 16.6839 11.9412 16.1213 11.3786C15.5587 10.816 14.7957 10.4999 14 10.4999C13.2044 10.4999 12.4413 10.816 11.8787 11.3786C11.3161 11.9412 11 12.7042 11 13.4999C11 14.2955 11.3161 15.0586 11.8787 15.6212C12.4413 16.1838 13.2044 16.4999 14 16.4999ZM14 19.4999C12.4087 19.4999 10.8826 18.8677 9.75736 17.7425C8.63215 16.6173 8.00001 15.0912 8.00001 13.4999C8.00001 11.9086 8.63215 10.3825 9.75736 9.25724C10.8826 8.13202 12.4087 7.49988 14 7.49988C15.5913 7.49988 17.1174 8.13202 18.2426 9.25724C19.3679 10.3825 20 11.9086 20 13.4999C20 15.0912 19.3679 16.6173 18.2426 17.7425C17.1174 18.8677 15.5913 19.4999 14 19.4999Z"
                                fill="#EB2026" />
                        </svg>
                    </div>

                    <h6 class="fs-24 fw-600 mb-10 ic-title">Address</h6>
                    <p class="fs-15 fw-400 mb-10 ic-des f-rubik">
                        {{ config('settings.s_address') }}
                    </p>

                </div>
                <!-- ic-contact-card -->
                <div class="ic-contact-card">
                    <!-- ic-icon -->
                    <div class="ic-icon mb-20">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.049 12.023C11.4565 14.4957 13.5043 16.5435 15.977 17.951L17.303 16.094C17.5162 15.7954 17.8315 15.5853 18.1892 15.5035C18.5469 15.4217 18.9222 15.4738 19.244 15.65C21.3655 16.8094 23.7083 17.5067 26.1185 17.696C26.4947 17.7258 26.8458 17.8963 27.1018 18.1735C27.3579 18.4507 27.5 18.8142 27.5 19.1915V25.8845C27.5001 26.2559 27.3624 26.6141 27.1136 26.8898C26.8647 27.1655 26.5225 27.3391 26.153 27.377C25.358 27.4595 24.557 27.5 23.75 27.5C10.91 27.5 0.5 17.09 0.5 4.25C0.5 3.443 0.5405 2.642 0.623 1.847C0.660882 1.47755 0.834476 1.13528 1.11018 0.886451C1.38589 0.637621 1.74411 0.49992 2.1155 0.5H8.8085C9.18584 0.499953 9.54934 0.642127 9.82652 0.898176C10.1037 1.15422 10.2742 1.50534 10.304 1.8815C10.4933 4.29169 11.1906 6.63452 12.35 8.756C12.5262 9.07785 12.5783 9.45311 12.4965 9.81079C12.4147 10.1685 12.2046 10.4838 11.906 10.697L10.049 12.023ZM6.266 11.0375L9.116 9.002C8.30717 7.25614 7.75303 5.40326 7.4705 3.5H3.515C3.506 3.749 3.5015 3.9995 3.5015 4.25C3.5 15.434 12.566 24.5 23.75 24.5C24.0005 24.5 24.251 24.4955 24.5 24.485V20.5295C22.5967 20.247 20.7439 19.6928 18.998 18.884L16.9625 21.734C16.143 21.4156 15.347 21.0396 14.5805 20.609L14.4935 20.5595C11.5514 18.8851 9.11492 16.4486 7.4405 13.5065L7.391 13.4195C6.96036 12.653 6.58442 11.857 6.266 11.0375Z"
                                fill="#EB2026" />
                        </svg>

                    </div>

                    <h6 class="fs-24 fw-600 mb-10 ic-title">Phone</h6>
                    <p class="fs-15 fw-400 mb-10 ic-des ">
                        {{ config('settings.s_phone') }}
                    </p>

                </div>
                <!-- ic-contact-card -->
                <div class="ic-contact-card">
                    <!-- ic-icon -->
                    <div class="ic-icon mb-20">
                        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.3645 9.28172L14.235 0.965717C14.4681 0.825841 14.7349 0.751953 15.0068 0.751953C15.2786 0.751953 15.5454 0.825841 15.7785 0.965717L29.6355 9.28322C29.7467 9.34984 29.8387 9.44414 29.9026 9.55692C29.9665 9.66969 30 9.7971 30 9.92672V29.0007C30 29.3985 29.842 29.7801 29.5607 30.0614C29.2794 30.3427 28.8978 30.5007 28.5 30.5007H1.5C1.10218 30.5007 0.720644 30.3427 0.43934 30.0614C0.158035 29.7801 1.65109e-08 29.3985 1.65109e-08 29.0007V9.92522C-2.71769e-05 9.7956 0.0335367 9.66819 0.0974182 9.55542C0.1613 9.44264 0.253318 9.34834 0.3645 9.28172ZM3 11.2002V27.5007H27V11.1987L15.006 3.99872L3 11.1987V11.2002ZM15.09 19.5477L23.034 12.8532L24.966 15.1482L15.111 23.4537L5.046 15.1587L6.954 12.8427L15.09 19.5477Z"
                                fill="#EB2026" />
                        </svg>


                    </div>

                    <h6 class="fs-24 fw-600 mb-10 ic-title">Email</h6>
                    <p class="fs-15 fw-400 mb-10 ic-des f-rubik">
                        {{ config('settings.s_email') }}
                    </p>

                </div>
                <!-- ic-contact-card -->
                <div class="ic-contact-card">
                    <!-- ic-icon -->
                    <div class="ic-icon mb-20">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15C30 23.2842 23.2842 30 15 30ZM15 27C21.6274 27 27 21.6274 27 15C27 8.37258 21.6274 3 15 3C8.37258 3 3 8.37258 3 15C3 21.6274 8.37258 27 15 27ZM16.5 15H22.5V18H13.5V7.5H16.5V15Z"
                                fill="#EB2026" />
                        </svg>



                    </div>

                    <h6 class="fs-24 fw-600 mb-10 ic-title f-rubik">Open Hours</h6>
                    <p class="fs-15 fw-400 mb-10 ic-des">
                        24/7
                    </p>

                </div>
            </div>
            <!-- ic-contact-map-form-wrapper -->
            <div class="ic-contact-map-form-wrapper">
                <div class="ic-single-item ic-map">
                    <iframe
                        src="{{ config('settings.g_map_iframe') }}"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="ic-single-item ">
                    <div class="ic-contact-form">
                        <h5 class=" ic-title fw-500 cl-pm">CONTACT US BY FORM</h5>

                        <div class="ic_form ">
                            <form action="{{ route('frontend.contactus.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-30">
                                    <!-- Name -->
                                    <div class="col-md-6 mb-15">
                                        <label for="name" class="form-label">Name *</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <!-- mail -->
                                    <div class="col-md-6 mb-15">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <!-- phone -->
                                    <div class="col-md-6 mb-15">
                                        <label for="phone" class="form-label">Phone *</label>
                                        <input type="tel" name="phone" class="form-control">
                                    </div>
                                    <!-- subject -->
                                    <div class="col-md-6 mb-15">
                                        <label for="subject" class="form-label">Subject *</label>
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                    <!-- message -->
                                    <div class="col-lg-12">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea name="message" class="form-control textarea"></textarea>
                                    </div>
                                </div>

                                <button class="ic-btn" type="submit">
                                    Submit Now
                                    <div class="ic-icon">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.78109 5.33327L5.20509 1.75726L6.14789 0.814453L11.3334 5.99993L6.14789 11.1853L5.20509 10.2425L8.78109 6.6666H0.666687V5.33327H8.78109Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush