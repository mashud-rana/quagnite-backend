{{-- <a href="#" class="ic-scroll-top"><i class="ri-arrow-up-s-line"></i></a> --}}

<footer class="ic__footer--part position-relative">
    <!-- <div class="footer-subscription">
        <div class="container">
            <div class="subscribe-addition">
                <div class="termsCondition">
                    <a href="#">Terms of Service</a>
                    <a href="#"> Privacy Policy</a>
                </div>
                <div class="footerNewsletter">
                    <form action="#">
                        <input type="text" placeholder="Your email address">
                        <button>Subscribe</button>
                    </form>
                </div>
                <div>
                    <ul class="ic__address--contact">
                        <li>
                            <p>Social Links</p>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <div class="ic-footer-content">
        <div class="container">
            <div class="ic-footer-row">

                <div class="ic-col">
                    <div class="ic--footer--heading">
                        <h6>Company</h6>
                        <ul>
                            {{-- <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Press & News</a>
                            </li>
                            <li>
                                <a href="#">Success Story</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.terms-condition') }}">Terms of Service</a>
                            </li>
                            <li>
                                <a href="{{ route('business.index') }}">For Business</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ic-col">
                    <div class="ic--footer--heading">
                        <h6>Pages</h6>
                        <ul>
                            <li>
                                <a href="{{ route('blog.index') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('event.index') }}">Event</a>
                            </li>
                            <li>
                                <a href="{{ route('forum.index') }}">Forum</a>
                            </li>
                            <li>
                                <a href="{{ route('all.wikis') }}">Wiki</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ic-col">
                    <div class="ic-footer-row-inner">
                        <div class="ic-col-inner">
                            <div class="ic--footer--heading">
                                <h6>Support</h6>
                                <ul>
                                    <li>
                                        <a href="{{ route('frontend.help') }}">Help & Support</a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">Trust & Safety</a>
                                    </li>
                                    <li>
                                        <a href="#">Selling on MCDns</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('auth.register') }}">Become a Coach</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ic-col-inner">
                            <div class="ic--footer--heading">
                                <h6>Contact Info</h6>
                                <ul class="ic__address--contact">
                                    <li>
                                        <div class="contact-logo">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6696_6084)">
                                                    <path
                                                        d="M10 17.4179L14.125 13.2929C14.9408 12.4771 15.4963 11.4377 15.7213 10.3061C15.9463 9.17459 15.8308 8.00173 15.3892 6.93587C14.9477 5.87 14.2 4.95899 13.2408 4.31804C12.2815 3.6771 11.1537 3.33499 10 3.33499C8.8463 3.33499 7.71851 3.6771 6.75924 4.31804C5.79997 4.95899 5.05229 5.87 4.61076 6.93587C4.16923 8.00173 4.05368 9.17459 4.27871 10.3061C4.50374 11.4377 5.05926 12.4771 5.875 13.2929L10 17.4179ZM10 19.7746L4.69667 14.4712C3.64779 13.4223 2.93349 12.086 2.64411 10.6311C2.35473 9.17626 2.50326 7.66826 3.07092 6.29782C3.63858 4.92738 4.59987 3.75605 5.83324 2.93194C7.0666 2.10783 8.51665 1.66797 10 1.66797C11.4834 1.66797 12.9334 2.10783 14.1668 2.93194C15.4001 3.75605 16.3614 4.92738 16.9291 6.29782C17.4968 7.66826 17.6453 9.17626 17.3559 10.6311C17.0665 12.086 16.3522 13.4223 15.3033 14.4712L10 19.7746ZM10 10.8346C10.442 10.8346 10.866 10.659 11.1785 10.3464C11.4911 10.0339 11.6667 9.60993 11.6667 9.1679C11.6667 8.72588 11.4911 8.30195 11.1785 7.98939C10.866 7.67683 10.442 7.50124 10 7.50124C9.55798 7.50124 9.13405 7.67683 8.82149 7.98939C8.50893 8.30195 8.33334 8.72588 8.33334 9.1679C8.33334 9.60993 8.50893 10.0339 8.82149 10.3464C9.13405 10.659 9.55798 10.8346 10 10.8346ZM10 12.5012C9.11595 12.5012 8.2681 12.15 7.64298 11.5249C7.01786 10.8998 6.66667 10.052 6.66667 9.1679C6.66667 8.28385 7.01786 7.436 7.64298 6.81088C8.2681 6.18576 9.11595 5.83457 10 5.83457C10.8841 5.83457 11.7319 6.18576 12.357 6.81088C12.9821 7.436 13.3333 8.28385 13.3333 9.1679C13.3333 10.052 12.9821 10.8998 12.357 11.5249C11.7319 12.15 10.8841 12.5012 10 12.5012Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6696_6084">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </div>
                                        <p>{{ config('settings.s_address') }}</p>
                                    </li>
                                    <li>
                                        <div class="contact-logo">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6696_6091)">
                                                    <path
                                                        d="M2.50033 2.5H17.5003C17.7213 2.5 17.9333 2.5878 18.0896 2.74408C18.2459 2.90036 18.3337 3.11232 18.3337 3.33333V16.6667C18.3337 16.8877 18.2459 17.0996 18.0896 17.2559C17.9333 17.4122 17.7213 17.5 17.5003 17.5H2.50033C2.27931 17.5 2.06735 17.4122 1.91107 17.2559C1.75479 17.0996 1.66699 16.8877 1.66699 16.6667V3.33333C1.66699 3.11232 1.75479 2.90036 1.91107 2.74408C2.06735 2.5878 2.27931 2.5 2.50033 2.5ZM16.667 6.03167L10.0603 11.9483L3.33366 6.01333V15.8333H16.667V6.03167ZM3.75949 4.16667L10.0512 9.71833L16.252 4.16667H3.75949Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6696_6091">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </div>
                                        <a
                                            href="mailto:{{ config('settings.s_email') }}">{{ config('settings.s_email') }}</a>
                                    </li>
                                    <li>
                                        <div class="contact-logo">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6696_6098)">
                                                    <path
                                                        d="M7.805 8.90167C8.58695 10.2754 9.7246 11.4131 11.0983 12.195L11.835 11.1633C11.9535 10.9974 12.1286 10.8807 12.3273 10.8353C12.526 10.7898 12.7345 10.8188 12.9133 10.9167C14.0919 11.5608 15.3935 11.9481 16.7325 12.0533C16.9415 12.0699 17.1365 12.1646 17.2788 12.3186C17.421 12.4726 17.5 12.6745 17.5 12.8842V16.6025C17.5 16.8088 17.4235 17.0078 17.2853 17.161C17.1471 17.3142 16.9569 17.4106 16.7517 17.4317C16.31 17.4775 15.865 17.5 15.4167 17.5C8.28333 17.5 2.5 11.7167 2.5 4.58333C2.5 4.135 2.5225 3.69 2.56833 3.24833C2.58938 3.04308 2.68582 2.85293 2.83899 2.71469C2.99216 2.57646 3.19117 2.49996 3.3975 2.5H7.11583C7.32547 2.49997 7.52741 2.57896 7.6814 2.72121C7.83539 2.86346 7.93011 3.05852 7.94667 3.2675C8.05185 4.60649 8.43923 5.90807 9.08333 7.08667C9.18122 7.26547 9.21018 7.47395 9.16472 7.67266C9.11927 7.87137 9.00255 8.04654 8.83667 8.165L7.805 8.90167ZM5.70333 8.35417L7.28667 7.22333C6.83732 6.25341 6.52946 5.22403 6.3725 4.16667H4.175C4.17 4.305 4.1675 4.44417 4.1675 4.58333C4.16667 10.7967 9.20333 15.8333 15.4167 15.8333C15.5558 15.8333 15.695 15.8308 15.8333 15.825V13.6275C14.776 13.4705 13.7466 13.1627 12.7767 12.7133L11.6458 14.2967C11.1906 14.1198 10.7483 13.9109 10.3225 13.6717L10.2742 13.6442C8.63965 12.7139 7.28607 11.3604 6.35583 9.72583L6.32833 9.6775C6.08909 9.25166 5.88024 8.80945 5.70333 8.35417Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6696_6098">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </div>
                                        <a
                                            href="tel:{{ config('settings.s_phone') }}">{{ config('settings.s_phone') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ic-apps-wrapper mt-50">
                        <a href="#">
                            <div class="ic_app">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/apple.svg') }}"
                                    alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="ic_app">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/google.svg') }}"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div>



                <div class="ic-col">
                    <div class="ic__calender--div">
                        <div id="calender" class="ic-calender-main"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-content text-center">
        <div class="container">
            <div class="ic-footer-bottom">

                <div class="left-content">
                    <div class="ic__call-back">
                        <a href="{{ route('frontend.contact') }}"><button>Request a call back</button></a>
                    </div>
                    <ul class="ic__social">
                        <li>
                            <a href="{{ config('settings.facebook') }}">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('settings.instagram') }}">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('settings.twitter') }}">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('settings.linkedin') }}">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right-content">
                    <p>(c) {{ date('Y') . ' ' . config('settings.site_title') }} All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>
