@extends('layouts.master-v1')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
<div class="container">
    <div class="row align-items-center ">
        <div class="col-md-7">
            <div class="ic-banner-content ic-playground-banner">
                <span class="ic-heading-title mb-15">Privacy Policy</span>
                <h1 class="black pb-15">Privacy Policy</h1>
                <div class="row">
                    <div class="col-xxl-10 col-lg-12">
                        <p class="color-deep-gray pb-30">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of printing and typesetting.
                        </p>
                        <div class="ic-video-programs">
                            <a href="#" class="ic-btn bg-effect">
                                Launch now
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 d-md-block d-none ">
            <div class="playground-images-right text-center">
                <img src="{{ asset('new-frontendv1/images/ebook/ebook.png') }}" class="img-fluid"
                    alt="images">
            </div>
        </div>
    </div>
</div>
</section>
{{-- banner part end --}}
<section class="ic-privacy-policy ic-section-space">
    <div class="container">
        <div class="ic-policy-item">
            <h5>Collection of Information:</h5>
        
            <ul>
                <li>
                    <p>What information is collected (e.g., personal information, user activity, etc.).</p>
                </li>
                <li>
                    <p>How the information is collected (e.g., through user registration, cookies, etc.).</p>
                </li>
            </ul>
        
        </div>
        
        <div class="ic-policy-item">
            <h5>Use of Information:</h5>
            <ul>
                <li>
                    <p>How the collected information will be used (e.g., for providing educational content, analytics, etc.).
                        Sharing of Information:</p>
                </li>
            </ul>
        </div>
        <div class="ic-policy-item">
            <h5>Sharing of Information:</h5>
           <ul>
            <li>
                <p>Circumstances under which the information may be shared with third parties (e.g., instructors, service providers, etc.).</p>
            </li>
           </ul>
        </div>
        <div class="ic-policy-item">
            <h5>Security Measures:</h5>

        <ul>
            <li>
                <p>How the LMS protects the collected information from unauthorized access or disclosure.
                </p>
            </li>
        </ul>
        </div>
          <div class="ic-policy-item">
            <h5>User Controls:</h5>
            <ul>
               <li>
                <p>How users can manage their privacy settings, update their information, or request data deletion.</p>
               </li>
            </ul>
          </div>
        <div class="ic-policy-item">
            <h5>Cookies and Tracking Technologies:</h5>

            <ul>
                <li>
                    <p> Information about the use of cookies and other tracking technologies, and how users can manage their preferences.</p>
                </li>
            </ul>
        </div>
        <div class="ic-policy-item">
            <h5>Compliance:</h5>
            <ul>
                <li>

                    <p>Compliance with data protection laws and regulations, such as GDPR, CCPA, etc.</p>
                </li>
            </ul>
        </div>
        <div class="ic-policy-item">
            <h5>Updates to Privacy Policy:</h5>
            <ul>
                <li>
                    <p>Notification process for any changes to the privacy policy.</p>

                </li>
            </ul>
        </div>
        <div class="ic-policy-item">
            <h5>Contact Information:</h5>
            <ul>
                <li>

                    <p>How users can contact the LMS provider for privacy-related concerns or questions.</p>
                </li>
            </ul>

        </div>
        <p class="gray">
            Remember that privacy policies are legal documents, and it's crucial to read and understand them. If you are unsure about any aspect, it's advisable to reach out to the LMS provider directly for clarification.</p>
    </div>
</section>
@endsection
