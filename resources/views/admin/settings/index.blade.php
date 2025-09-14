@extends('admin.layouts.master')

@section('content')
    <!-- Start content -->
    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            <div class="email-leftbar card ic_box_shadow">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="genral-tab" data-bs-toggle="pill" data-bs-target="#genral" type="button"
                        role="tab" aria-controls="genral" aria-selected="true">
                        General Settings
                    </a>

                    <a class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#support" type="button"
                        role="tab" aria-controls="support" aria-selected="false">
                        Contact Information
                    </a>
                    <a class="nav-link" id="email-tab" data-bs-toggle="pill" data-bs-target="#email" type="button"
                        role="tab" aria-controls="email" aria-selected="false">
                        Email Settings
                    </a>
                    <a class="nav-link" id="social-tab" data-bs-toggle="pill" data-bs-target="#social" type="button"
                        role="tab" aria-controls="social" aria-selected="false">
                        Social Settings
                    </a>
                    <a class="nav-link" id="socialite-tab" data-bs-toggle="pill" data-bs-target="#socialite" type="button"
                        role="tab" aria-controls="socialite" aria-selected="false">
                        Socialite Settings
                    </a>
                    <a class="nav-link" id="payment-tab" data-bs-toggle="pill" data-bs-target="#payment" type="button"
                        role="tab" aria-controls="payment" aria-selected="false">
                        Payment settings
                    </a>
                    <a class="nav-link" id="payment-tab" data-bs-toggle="pill" data-bs-target="#storage" type="button"
                        role="tab" aria-controls="payment" aria-selected="false">
                        Storage settings
                    </a>
                    <a class="nav-link" id="zoom-tab" data-bs-toggle="pill" data-bs-target="#zoom" type="button"
                        role="tab" aria-controls="zoom" aria-selected="false">
                        Zoom settings
                    </a>
                    <a class="nav-link" id="vimeo-tab" data-bs-toggle="pill" data-bs-target="#vimeo" type="button"
                        role="tab" aria-controls="vimeo" aria-selected="false">
                        Vimeo settings
                    </a>
                    <a class="nav-link" id="chat-tab" data-bs-toggle="pill" data-bs-target="#chat" type="button"
                        role="tab" aria-controls="chat" aria-selected="false">
                        Pusher settings
                    </a>
                    <a class="nav-link" id="commission-tab" data-bs-toggle="pill" data-bs-target="#commission"
                        type="button" role="tab" aria-controls="commission" aria-selected="false">
                        Transaction settings
                    </a>
                    <a class="nav-link" id="refund-tab" data-bs-toggle="pill" data-bs-target="#refund"
                        type="button" role="tab" aria-controls="refund" aria-selected="false">
                        Refund settings
                    </a>
                </div>
            </div>
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">
                <div class="card ic_box_shadow">
                    <div class="card-body">
                        <form id="settings_update" method="POST" enctype="multipart/form-data"
                            action="{{ route('admin.settings.update') }}">
                            @csrf
                            <div class="tab-content" id="v-pills-tabContent">

                                <!-- General Settings -->
                                <div class="tab-pane fade show active" id="genral" role="tabpanel"
                                    aria-labelledby="genral-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="site_title">Site Title</label>
                                        <input type="text" class="form-control" name="site_title" id="site_title"
                                            placeholder="Site Title" value="{{ config('settings.site_title') }}"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="site_url">Site URL</label>
                                        <input type="text" class="form-control" name="site_url" id="site_url"
                                            placeholder="Site URL" value="{{ config('settings.site_url') }}"
                                            autocomplete="off">
                                    </div>


                                    {{-- Site Logo --}}
                                    <div class="form-group mt-2">
                                        <label class="font-semibold block">Primary Logo</label>
                                        <div class="my-2 ic-file-pond-wrap">
                                            {{-- show Image --}}
                                            <img class="uploaded-img"
                                                src="{{ getStoreFile(config('settings.site_logo')) }}" alt="Footer Logo"
                                                id="siteLogo">
                                            {{-- Input Field --}}
                                            <div class="ic-file-uploade-wrap">
                                                <input id="" type="file" name="site_logo"
                                                    class="imageUploadFilePond" accept="image/*"
                                                    data-preview-id="siteLogo">
                                                {{-- <label for="ic-filepond-box">
                                               <div class="box-content">
                                                   <i class="ri-upload-cloud-2-line"></i>
                                                <p>Upload image</p>
                                               </div>
                                            </label> --}}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Footer Logo --}}
                                    <div class="form-group mt-2">
                                        <label class="font-semibold block">Secondary Logo</label>
                                        <div class="my-2 ic-file-pond-wrap">
                                            {{-- show Image --}}
                                            <img class="uploaded-img"
                                                src="{{ getStoreFile(config('settings.footer_logo')) }}" alt="Footer Logo"
                                                id="footerLogo">
                                            {{-- Input Field --}}
                                            <div class="ic-file-uploade-wrap">
                                                <input id="" type="file" name="footer_logo"
                                                    class="imageUploadFilePond" accept="image/*"
                                                    data-preview-id="footerLogo">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Fav icon --}}
                                    <div class="form-group mt-2">
                                        <label class="font-semibold block">Fav Icon</label>
                                        <div class="my-2 ic-file-pond-wrap">
                                            {{-- show Image --}}
                                            <img class="uploaded-img"
                                                src="{{ getStoreFile(config('settings.favicon_logo')) }}"
                                                alt="Favicon Logo" id="faviconLogo">
                                            {{-- Input Field --}}
                                            <div class="ic-file-uploade-wrap">
                                                <input id="" type="file" name="favicon_logo"
                                                    class="imageUploadFilePond" accept="image/*"
                                                    data-preview-id="faviconLogo">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Login Image --}}
                                    <div class="form-group mt-2">
                                        <label class="font-semibold block">Login Image</label>
                                        <div class="my-2 ic-file-pond-wrap">
                                            {{-- show Image --}}
                                            <img class="uploaded-img"
                                                src="{{ getStoreFile(config('settings.login_image')) }}"
                                                alt="Favicon Logo" id="loginImage">
                                            {{-- Input Field --}}
                                            <div class="ic-file-uploade-wrap">
                                                <input id="" type="file" name="login_image"
                                                    class="imageUploadFilePond" accept="image/*"
                                                    data-preview-id="loginImage">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- data_notfound --}}
                                    <div class="form-group mt-2">
                                        <label class="font-semibold block">Data Not Found Image</label>
                                        <div class="my-2 ic-file-pond-wrap">
                                            {{-- show Image --}}
                                            <img class="uploaded-img"
                                                src="{{ getStoreFile(config('settings.data_notfound')) }}"
                                                alt="Favicon Logo" id="dataNotFoundImage">
                                            {{-- Input Field --}}
                                            <div class="ic-file-uploade-wrap">
                                                <input id="" type="file" name="data_notfound"
                                                    class="imageUploadFilePond" accept="image/*"
                                                    data-preview-id="dataNotFoundImage">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- About Company --}}
                                    <div class="form-group mt-2">
                                        <label for="about_company">About Company</label>
                                        <textarea rows="4" class="form-control" name="about_company" id="about_company" Placeholder="About Company"
                                            autocomplete="off">{{ config('settings.about_company') }}</textarea>
                                    </div>
                                </div>
                                <!-- Support Settings -->
                                <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="s_phone">Phone</label>
                                                <input type="text" class="form-control" name="s_phone" id="s_phone"
                                                    Placeholder="Enter Support Phone" autocomplete="off"
                                                    value="{{ config('settings.s_phone') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="s_email">Email</label>
                                                <input type="text" class="form-control" name="s_email" id="s_email"
                                                    Placeholder="Enter Support Email" autocomplete="off"
                                                    value="{{ config('settings.s_email') }}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group mt-2">
                                        <label for="s_address">Address</label>
                                        <textarea rows="4" class="form-control" name="s_address" id="s_address" Placeholder="Enter Support Address"
                                            autocomplete="off">{{ config('settings.s_address') }}</textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="g_map_iframe">Google Map About Page</label>
                                        <textarea rows="4" class="form-control" name="g_map_iframe" id="g_map_iframe" Placeholder="Enter map iframe"
                                            autocomplete="off">{{ config('settings.g_map_iframe') }}</textarea>
                                    </div>

                                </div>
                                <!-- Email Settings -->
                                <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mail_mailer">Mail Driver/ Mailer</label>
                                                <input type="text" class="form-control" name="mail_mailer"
                                                    id="mail_mailer" Placeholder="Enter Mail Mailer" autocomplete="off"
                                                    value="{{ config('settings.mail_mailer') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="mail_host">Mail Host</label>
                                                <input type="text" class="form-control" name="mail_host"
                                                    id="mail_host" Placeholder="Enter Mail Host" autocomplete="off"
                                                    value="{{ config('settings.mail_host') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_port">Mail Port</label>
                                                <input type="text" class="form-control" name="mail_port"
                                                    id="mail_port" Placeholder="Enter Mail Port" autocomplete="off"
                                                    value="{{ config('settings.mail_port') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_username">Mail Username</label>
                                                <input type="text" class="form-control" name="mail_username"
                                                    id="mail_username" Placeholder="Enter Mail Username"
                                                    autocomplete="off" value="{{ config('settings.mail_username') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_password">Mail Password</label>
                                                <input type="text" class="form-control" name="mail_password"
                                                    id="mail_password" Placeholder="Enter Mail Password"
                                                    autocomplete="off" value="{{ config('settings.mail_password') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_encryption">Mail Encryption</label>
                                                <input type="text" class="form-control" name="mail_encryption"
                                                    id="mail_encryption" Placeholder="Enter Mail Encryption"
                                                    autocomplete="off" value="{{ config('settings.mail_encryption') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_from_address">Mail From Address</label>
                                                <input type="text" class="form-control" name="mail_from_address"
                                                    id="mail_from_address" Placeholder="Enter Mail From Address"
                                                    autocomplete="off"
                                                    value="{{ config('settings.mail_from_address') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="mail_from_name">Mail From Name</label>
                                                <input type="text" class="form-control" name="mail_from_name"
                                                    id="mail_from_name" Placeholder="Enter Mail From Name"
                                                    autocomplete="off" value="{{ config('settings.mail_from_name') }}">
                                            </div>
                                        </div>
                                    </div>






                                </div>
                                <!-- Social Settings -->
                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="facebook"
                                                        id="facebook" value="{{ config('settings.facebook') }}"
                                                        placeholder="Enter facebook url...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="twitter">Twitter</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="twitter"
                                                        id="twitter" value="{{ config('settings.twitter') }}"
                                                        placeholder="Enter twitter url...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="linkedin">Linkedin</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="mdi mdi-linkedin"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="linkedin"
                                                        id="linkedin" value="{{ config('settings.linkedin') }}"
                                                        placeholder="Enter linkedin url...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="instagram">Instagram</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="mdi mdi-instagram"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="instagram"
                                                        id="instagram" value="{{ config('settings.instagram') }}"
                                                        placeholder="Enter instagram url...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="pinterest">Pinterest</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="mdi mdi-pinterest"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="pinterest"
                                                        id="pinterest" value="{{ config('settings.pinterest') }}"
                                                        placeholder="Enter pinterest url...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Socialite Settings -->
                                <div class="tab-pane fade" id="socialite" role="tabpanel"
                                    aria-labelledby="socialite-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="google_client_id">Google Client ID</label>
                                                <input type="text" class="form-control" name="google_client_id"
                                                    id="google_client_id" placeholder="Google Client ID"
                                                    value="{{ config('settings.google_client_id') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="google_client_secret">Google Client Secret</label>
                                                <input type="text" class="form-control" name="google_client_secret"
                                                    id="google_client_secret" placeholder="Google Client Secret"
                                                    value="{{ config('settings.google_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="google_redirect_url">Google Redirect Url</label>
                                                <input type="text" class="form-control" name="google_redirect_url"
                                                    id="google_redirect_url" placeholder="Google Redirect Url"
                                                    value="{{ config('settings.google_redirect_url') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>


                                    {{--
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="facebook_client_id">Facebook Client ID</label>
                                                <input type="text" class="form-control" name="facebook_client_id"
                                                    id="facebook_client_id" placeholder="Facebook Client ID"
                                                    value="{{ config('settings.facebook_client_id') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="facebook_client_secret">Facebook Client Secret</label>
                                                <input type="text" class="form-control" name="facebook_client_secret"
                                                    id="facebook_client_secret" placeholder="Facebook Client Secret"
                                                    value="{{ config('settings.facebook_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="facebook_redirect_url">Facebook Redirect Url</label>
                                                <input type="text" class="form-control" name="facebook_redirect_url"
                                                    id="facebook_redirect_url" placeholder="Facebook Redirect Url"
                                                    value="{{ config('settings.facebook_redirect_url') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="linkedin_client_id">Linkedin Client ID</label>
                                                <input type="text" class="form-control" name="linkedin_client_id"
                                                    id="linkedin_client_id" placeholder="Linkedin Client ID"
                                                    value="{{ config('settings.linkedin_client_id') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="linkedin_client_secret">Linkedin Client Secret</label>
                                                <input type="text" class="form-control" name="linkedin_client_secret"
                                                    id="linkedin_client_secret" placeholder="Linkedin Client Secret"
                                                    value="{{ config('settings.linkedin_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="linkedin_redirect_url">Linkedin Redirect Url</label>
                                                <input type="text" class="form-control" name="linkedin_redirect_url"
                                                    id="linkedin_redirect_url" placeholder="Linkedin Redirect Url"
                                                    value="{{ config('settings.linkedin_redirect_url') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div> --}}



                                </div>

                                <!-- Payment Settings -->
                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="stripe_key">Stripe Key</label>
                                                <input type="text" class="form-control" name="stripe_key"
                                                    id="stripe_key" placeholder="Stripe Key"
                                                    value="{{ config('settings.stripe_key') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="stripe_secret">Stripe Secret</label>
                                                <input type="text" class="form-control" name="stripe_secret"
                                                    id="stripe_secret" placeholder="Stripe Secret"
                                                    value="{{ config('settings.stripe_secret') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="paypal_sandbox_app_id">Stripe Base URI</label>
                                                <input type="text" class="form-control" name="stripe_base_uri"
                                                    id="stripe_base_uri" placeholder="Stripe Base URI"
                                                    value="{{ config('settings.stripe_base_uri') }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="mb-2">
                                        <label class="form-label mb-1 d-flex">Paypal Mode :</label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio1" name="paypal_mode" value="sandbox"
                                                class="form-check-input"
                                                {{ config('settings.paypal_mode') == 'sandbox' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio1">Sandbox</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio2" name="paypal_mode" value="live"
                                                class="form-check-input"
                                                {{ config('settings.paypal_mode') == 'live' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio2">Live</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="paypal_sandbox_client_id">Paypal Sandbox Client ID</label>
                                                <input type="text" class="form-control"
                                                    name="paypal_sandbox_client_id" id="paypal_sandbox_client_id"
                                                    placeholder="Paypal Sandbox Client ID"
                                                    value="{{ config('settings.paypal_sandbox_client_id') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="paypal_sandbox_client_secret">Paypal Sandbox Client
                                                    Secret</label>
                                                <input type="text" class="form-control"
                                                    name="paypal_sandbox_client_secret" id="paypal_sandbox_client_secret"
                                                    placeholder="Paypal Sandbox Client Secret"
                                                    value="{{ config('settings.paypal_sandbox_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="paypal_sandbox_app_id">Paypal Sandbox Base URI</label>
                                                <input type="text" class="form-control" name="paypal_sandbox_base_uri"
                                                    id="paypal_sandbox_base_uri" placeholder="Paypal Sandbox Base URI"
                                                    value="{{ config('settings.paypal_sandbox_base_uri') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="paypal_live_client_id">Paypal Live Client ID</label>
                                                <input type="text" class="form-control" name="paypal_live_client_id"
                                                    id="paypal_live_client_id" placeholder="Paypal Live Client ID"
                                                    value="{{ config('settings.paypal_live_client_id') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="paypal_live_client_secret">Paypal Live Client Secret</label>
                                                <input type="text" class="form-control"
                                                    name="paypal_live_client_secret" id="paypal_live_client_secret"
                                                    placeholder="Paypal Live Client Secret"
                                                    value="{{ config('settings.paypal_live_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="paypal_live_app_id">Paypal Live Base URI</label>
                                                <input type="text" class="form-control" name="paypal_live_base_uri"
                                                    id="paypal_live_base_uri" placeholder="Paypal Live Base URI"
                                                    value="{{ config('settings.paypal_live_base_uri') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="paypal_sandbox_app_id">Platform Charge</label>
                                                <input type="text" class="form-control" name="platform_charge"
                                                    id="platform_charge" placeholder="Platform Charge"
                                                    value="{{ config('settings.platform_charge') }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Storage Settings -->
                                <div class="tab-pane fade show" id="storage" role="tabpanel"
                                    aria-labelledby="genral-tab" tabindex="0">
                                    <div class="mb-2">
                                        <label class="form-label mb-1 d-flex">Storage Driver :</label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio3" name="storage_driver"
                                                value="{{ STORAGE_TYPE_PUBLIC }}" class="form-check-input"
                                                {{ config('settings.storage_driver') == STORAGE_TYPE_PUBLIC ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio3">Development (Public)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio4" name="storage_driver"
                                                value="{{ STORAGE_TYPE_S3 }}" class="form-check-input"
                                                {{ config('settings.storage_driver') == STORAGE_TYPE_S3 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio4">Production (AWS S3)</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div @if (config('settings.storage_driver') == STORAGE_TYPE_PUBLIC) class="d-none" @endif id="awsS3Inputs">
                                        <div class="form-group">
                                            <label for="site_title">AWS Access Key ID</label>
                                            <input type="text" class="form-control" name="aws_key" id="aws_key"
                                                placeholder="AWS Access Key ID" value="{{ config('settings.aws_key') }}"
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="site_url">AWS Secret Access Key</label>
                                            <input type="text" class="form-control" name="aws_secret" id="aws_secret"
                                                placeholder="AWS Secret Access Key"
                                                value="{{ config('settings.aws_secret') }}" autocomplete="off">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="site_url">AWS Default Region</label>
                                            <input type="text" class="form-control" name="aws_region" id="aws_region"
                                                placeholder="AWS Default Region"
                                                value="{{ config('settings.aws_region') }}" autocomplete="off">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="aws_bucket">AWS Bucket</label>
                                            <input type="text" class="form-control" name="aws_bucket" id="aws_bucket"
                                                placeholder="AWS Bucket" value="{{ config('settings.aws_bucket') }}"
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="aws_bucket_endpoint">AWS Bucket Endpoint</label>
                                            <input type="text" class="form-control" name="aws_bucket_endpoint"
                                                id="aws_bucket_endpoint" placeholder="AWS Bucket Endpoint"
                                                value="{{ config('settings.aws_bucket_endpoint') }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <!-- Commission Settings -->
                                <div class="tab-pane fade" id="commission" role="tabpanel"
                                    aria-labelledby="commission-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="system_commission">System Commission</label>
                                        <input type="text" class="form-control" name="system_commission"
                                            id="system_commission" placeholder="System Commission"
                                            value="{{ config('settings.system_commission') }}" autocomplete="off">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="system_commission">Minimum Withdraw Limit</label>
                                        <input type="text" class="form-control" name="min_withdraw" id="min_withdraw"
                                            placeholder="Minimum withdraw " value="{{ config('settings.min_withdraw') }}"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <!-- Refund Settings -->
                                <div class="tab-pane fade" id="refund" role="tabpanel" aria-labelledby="refund-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="refund_duration">Refund Eligibility Period</label>
                                        <input type="number" class="form-control" name="refund_duration" id="refund_duration" 
                                            placeholder="e.g., 30 days from purchase" value="{{ config('settings.refund_duration') }}" autocomplete="off">
                                    </div>
                                </div>
                                

                                <!-- Zoom Settings -->
                                <div class="tab-pane fade" id="zoom" role="tabpanel" aria-labelledby="zoom-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="zoom_client_key">Zoom Client ID</label>
                                                <input type="text" class="form-control" name="zoom_client_id"
                                                    id="zoom_client_id" placeholder="Zoom Client ID"
                                                    value="{{ config('settings.zoom_client_id') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="zoom_client_secret">Zoom Client Secret</label>
                                                <input type="text" class="form-control" name="zoom_client_secret"
                                                    id="zoom_client_secret" placeholder="Zoom Client Secret"
                                                    value="{{ config('settings.zoom_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="zoom_account_id">Zoom Account ID</label>
                                                <input type="text" class="form-control" name="zoom_account_id"
                                                    id="zoom_account_id" placeholder="Zoom Account ID"
                                                    value="{{ config('settings.zoom_account_id') }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="zoom_client_key">Web SDK Client ID</label>
                                                <input type="text" class="form-control" name="zoom_web_client_id"
                                                    id="zoom_web_client_id" placeholder="Zoom Client ID"
                                                    value="{{ config('settings.zoom_web_client_id') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="zoom_client_secret">Web SDK Client Secret</label>
                                                <input type="text" class="form-control" name="zoom_web_client_secret"
                                                    id="zoom_web_client_secret" placeholder="Zoom Client Secret"
                                                    value="{{ config('settings.zoom_web_client_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vimeo Settings -->

                                <div class="tab-pane fade" id="vimeo" role="tabpanel" aria-labelledby="vimeo-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="vimeo_client">Vimeo Client</label>
                                                <input type="text" class="form-control" name="vimeo_client"
                                                    id="vimeo_client" value="{{ config('settings.vimeo_client') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2 mt-lg-0">
                                                <label for="vimeo_secret">Vimeo Secret</label>
                                                <input type="text" class="form-control" name="vimeo_secret"
                                                    id="vimeo_secret" value="{{ config('settings.vimeo_secret') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="vimeo_access">Vimeo Access</label>
                                                <input type="text" class="form-control" name="vimeo_access"
                                                    id="vimeo_access" value="{{ config('settings.vimeo_access') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chat Settings -->
                                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <!-- Mode Selection -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Pusher Mode:</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pusher_mode"
                                                        id="pusher_mode_dev" value="{{ PUSHER_MODE_DEV }}"
                                                        onclick="togglePusherMode()"
                                                        {{ config('settings.pusher_mode') == PUSHER_MODE_DEV ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="pusher_mode_dev">Development</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pusher_mode"
                                                        id="pusher_mode_prod" value="{{ PUSHER_MODE_PROD }}"
                                                        onclick="togglePusherMode()"
                                                        {{ config('settings.pusher_mode') == PUSHER_MODE_PROD ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="pusher_mode_prod">Production</label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Development Credentials -->
                                        <div class="pusher-credentials" id="dev-credentials">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="dev_pusher_app_id">Pusher App ID (Dev)</label>
                                                    <input type="text" class="form-control" name="dev_pusher_app_id"
                                                        id="dev_pusher_app_id" placeholder="Pusher App ID (Dev)"
                                                        value="{{ config('settings.dev_pusher_app_id') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="dev_pusher_app_key">Pusher App Key (Dev)</label>
                                                    <input type="text" class="form-control" name="dev_pusher_app_key"
                                                        id="dev_pusher_app_key" placeholder="Pusher App Key (Dev)"
                                                        value="{{ config('settings.dev_pusher_app_key') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mt-2">
                                                    <label for="dev_pusher_app_secret">Pusher App Secret (Dev)</label>
                                                    <input type="text" class="form-control"
                                                        name="dev_pusher_app_secret" id="dev_pusher_app_secret"
                                                        placeholder="Pusher App Secret (Dev)"
                                                        value="{{ config('settings.dev_pusher_app_secret') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mt-2">
                                                    <label for="dev_pusher_app_cluster">Pusher App Cluster (Dev)</label>
                                                    <input type="text" class="form-control"
                                                        name="dev_pusher_app_cluster" id="dev_pusher_app_cluster"
                                                        placeholder="Pusher App Cluster (Dev)"
                                                        value="{{ config('settings.dev_pusher_app_cluster') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Production Credentials -->
                                        <div class="pusher-credentials" id="prod-credentials" style="display: none;">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="pusher_app_id">Pusher App ID (Prod)</label>
                                                    <input type="text" class="form-control" name="pusher_app_id"
                                                        id="pusher_app_id" placeholder="Pusher App ID (Prod)"
                                                        value="{{ config('settings.pusher_app_id') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="pusher_app_key">Pusher App Key (Prod)</label>
                                                    <input type="text" class="form-control" name="pusher_app_key"
                                                        id="pusher_app_key" placeholder="Pusher App Key (Prod)"
                                                        value="{{ config('settings.pusher_app_key') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mt-2">
                                                    <label for="pusher_app_secret">Pusher App Secret (Prod)</label>
                                                    <input type="text" class="form-control"
                                                        name="pusher_app_secret" id="pusher_app_secret"
                                                        placeholder="Pusher App Secret (Prod)"
                                                        value="{{ config('settings.pusher_app_secret') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mt-2">
                                                    <label for="pusher_app_cluster">Pusher App Cluster (Prod)</label>
                                                    <input type="text" class="form-control"
                                                        name="pusher_app_cluster" id="pusher_app_cluster"
                                                        placeholder="Pusher App Cluster (Prod)"
                                                        value="{{ config('settings.pusher_app_cluster') }}"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- @can('All Settings', 'Update Settings') --}}
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-grid mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                            type="button">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- @endcan --}}
                        </form>
                    </div>
                </div>

            </div> <!-- end Col-9 -->
        </div>
    </div>
    <!-- content -->
@endsection

@push('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
    <style>
        .filepond--credits {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
        $(document).ready(function() {
            $('input[name="storage_driver"]').change(function() {
                let value = $(this).val();
                console.log(value);
                if (value == "{{ STORAGE_TYPE_PUBLIC }}") {
                    $('#awsS3Inputs').addClass('d-none');
                } else {
                    $('#awsS3Inputs').removeClass('d-none');
                }
            });


            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            // Get all elements with the class 'imageUploadFilePond'
            const inputElements = document.querySelectorAll('.imageUploadFilePond');

            // Loop through each input element
            inputElements.forEach(function(inputElement) {

                // Get the ID of the image element to update
                const previewId = inputElement.dataset.previewId;

                // Create a FilePond instance for each input element
                const pond = FilePond.create(inputElement).setOptions({
                    server: {
                        url: "{{ route('admin.settings.image.update') }}",
                        process: {
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            onload: (response) => {
                                // Parse the JSON response
                                const responseData = JSON.parse(response);

                                // Update the image source using the previewId
                                document.getElementById(previewId).src = responseData.url;
                            },
                            onerror: (response) => {
                                // Error handling logic here
                                console.error(response);
                            }
                        }
                    },
                });
            });

        });
    </script>
    <script>
        function togglePusherMode() {
            var devCredentials = document.getElementById('dev-credentials');
            var prodCredentials = document.getElementById('prod-credentials');

            if (document.getElementById('pusher_mode_dev').checked) {
                devCredentials.style.display = 'block';
                prodCredentials.style.display = 'none';
            } else {
                devCredentials.style.display = 'none';
                prodCredentials.style.display = 'block';
            }
        }

        // Call the function on page load to set the initial state
        document.addEventListener('DOMContentLoaded', function() {
            togglePusherMode();
        });
    </script>
@endpush
