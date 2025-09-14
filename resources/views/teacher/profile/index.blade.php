@extends('layouts.master-user')

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
                    {{-- <li>
                        <a href="#" class="ic-profile__links" data-link="payment-method">Payment Method</a>
                    </li>
                    <li>
                        <a href="#" class="ic-profile__links" data-link="resume">Resume</a>
                    </li> --}}
                </ul>
                <div class="ic-profile__tabsContent">
                    <form action="{{ route('teacher.profile.update', $user->id) }}" method="POST" id="form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="ic-profile__tabsItems active" id="edit-profile">
                            <div class="ic-profile__photoUpdate">
                                <div class="ic-profile__avatar">
                                    <img src="{{ getStoreFile($user->avatar, $user->storage_type) }}" id="Image_change" alt="mcdns avatar">
                                </div>
                                <div class="ic-profile__avatarName">
                                    <p class="ic__avatarName">{{ $user->full_name }}</p>
                                    <p class="avatar__filesize">PNG or JPG no bigger than 800px wide and tall.</p>
                                    <label for="profile-avatar" class="upload-avatar">
                                        <input type="file" class="d-none" id="profile-avatar" name="avatar"
                                            onchange="document.getElementById('Image_change').src = window.URL.createObjectURL(this.files[0])">
                                        <i class="ri-upload-cloud-2-line"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Your Name"
                                            value="{{ $user->first_name }}">
                                        @error('first_name')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Your Name"
                                            value="{{ $user->last_name }}">
                                        @error('last_name')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Phone Name</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            autocomplete="off" value="{{ $user->phone }}" required>
                                        @error('phone')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Your Email"
                                            value="{{ $user->email }}">
                                        @error('email')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="Country">
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
                                </div> --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Your Address Line" value="{{ $user->teacher->address ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Gender</label>
                                        <select name="gender" class="selectpicker" id="">
                                            <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>
                                                Female</option>
                                            <option value="other" {{ $user->gender === 'other' ? 'selected' : '' }}>Other
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">DOB</label>
                                        <input type="date" name="date_of_birth" class="form-control" required=""
                                        placeholder="Enter date of birth" value="{{ $user->date_of_birth }}">
                                    @error('date_of_birth')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Self Bio</label>
                                        <textarea name="about_me" id="" class="form-control" cols="30" rows="10"
                                            placeholder="Beautiful super large botanical garden - amazing it’s in NYC. Getting into the garden with my voucher was easy and seamless! Just went up to the ticket counter and went right in.">{{ $user->teacher->about_me ?? '' }}</textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="ic-profile-submit">
                                <button type="submit" class="btn-book">Update Profile</button>
                                {{-- <a href="#" class="text-red">Cancel</a> --}}
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('teacher.update.password') }}" method="POST" id="form2">
                        @csrf
                        <div class="ic-profile__tabsItems" id="account-setting">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Current password</label>
                                        <input type="password" class="form-control" name="current_password"
                                            placeholder="**************">
                                        @error('current_password')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">New password</label>
                                        <input type="password" class="form-control" name="new_password"
                                            placeholder="**************">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Confirm New password</label>
                                        <input type="password" class="form-control" name="new_password_confirmation"
                                            placeholder="**************">
                                    </div>
                                </div>
                            </div>
                            <div class="ic-profile-submit">
                                <button type="submit" class="btn-book">Update Password</button>
                            </div>
                        </div>
                    </form>
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
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush

@push('styles')
@endpush
