@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="ic-profile__setting">
                <ul class="ic-profile__navsTab">
                    <li>
                        <a href="#" class="ic-profile__links active" data-link="edit-profile">Edit Profile</a>
                    </li>
                    <li>
                        <a href="#" class="ic-profile__links" data-link="account-setting">Account Setting</a>
                    </li>
                    <li>
                        <a href="#" class="ic-profile__links" data-link="payment-method">Payment Method</a>
                    </li>
                    <li>
                        <a href="#" class="ic-profile__links" data-link="resume">Resume</a>
                    </li>
                </ul>
                <form action="#">
                    <div class="ic-profile__tabsContent">
                        <div class="ic-profile__tabsItems active" id="edit-profile">
                            <div class="ic-profile__photoUpdate">
                                <div class="ic-profile__avatar">
                                    <img src="{{ asset('new-frontend/images/profile-avatar.png') }}" alt="mcdns avatar">
                                </div>
                                <div class="ic-profile__avatarName">
                                    <p class="ic__avatarName">Mainuddin </p>
                                    <p class="avatar__filesize">PNG or JPG no bigger than 800px wide and tall.</p>
                                    <label for="profile-avatar" class="upload-avatar">
                                        <input type="file" class="d-none" id="profile-avatar">
                                        <i class="ri-upload-cloud-2-line"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Phone Name</label>
                                        <input type="number" class="form-control" name="number"
                                            placeholder="Your Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Country</label>
                                        <input type="text" class="form-control" name="email" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">State</label>
                                        <select name="state" class="selectpicker" id="">
                                            <option value="0">Sate</option>
                                            <option value="1">Dhaka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Address Line 1</label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Your Address Line">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Gender</label>
                                        <select name="state" class="selectpicker" id="">
                                            <option value="0">Male</option>
                                            <option value="1">Dhaka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Self Bio</label>
                                        <textarea name="self_bio" id="" class="form-control" cols="30" rows="10"
                                            placeholder="Beautiful super large botanical garden - amazing it’s in NYC. Getting into the garden with my voucher was easy and seamless! Just went up to the ticket counter and went right in."></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="ic-profile-submit">
                                <button class="btn-book">Update Profile</button>
                                <a href="#" class="text-red">Cancel</a>
                            </div>
                        </div>
                        <div class="ic-profile__tabsItems" id="account-setting">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Email Address</label>
                                        <input type="email" class="form-control" name="email_address"
                                            placeholder="Your Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Current password</label>
                                        <input type="passowrd" class="form-control" name="cureent_password"
                                            placeholder="**************">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">New password</label>
                                        <input type="passowrd" class="form-control" name="new_password"
                                            placeholder="**************">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Confirm New password</label>
                                        <input type="passowrd" class="form-control" name="new_password"
                                            placeholder="**************">
                                    </div>
                                </div>
                            </div>
                            <div class="ic-profile-submit">
                                <button class="btn-book">Update Password</button>
                            </div>
                        </div>
                        <div class="ic-profile__tabsItems" id="payment-method">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ic-profile__paymentCard">
                                        <div class="ic-profile__card">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="6.5" stroke="#06738A"
                                                    stroke-width="3" />
                                            </svg>
                                            <div class="ic-profile__cardView">
                                                <div>
                                                    <i class="ri-bank-card-line"></i>
                                                    <span>Visa ****1435</span>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('new-frontend/images/visa.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ic-profile__card">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="6.5" stroke="#06738A"
                                                    stroke-width="3" />
                                            </svg>
                                            <div class="ic-profile__cardView">
                                                <div>
                                                    <i class="ri-bank-card-line"></i>
                                                    <span>Visa ****1435</span>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('new-frontend/images/visa.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-profile__tabsItems" id="resume">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ic-profile__fileUpload">
                                        <label for="resume-file">
                                            <i class="ri-upload-cloud-2-line"></i>
                                            <p class="announcement">Your files here Or Browse to upload</p>
                                            <p class="how-muchsize">Only JPEG, PNG, Doc And PDF files with max size of 15
                                                MB.</p>
                                            <p class="file-names"></p>
                                        </label>
                                        <input type="file" id="resume-file" name="upload_count" class="d-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
