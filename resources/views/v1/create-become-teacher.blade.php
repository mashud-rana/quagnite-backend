@extends('layouts.master-user')

@section('content')
<section class="ic-become-treacher" >
    <div class="container">
        <div class="ic-member-become-main mt-30">
            <div class="ic-become-banner-post" style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.90) 0%, rgba(0, 172, 182, 0.90) 100%), url({{asset('new-frontendv1/images/member-dashboard/member-intro.png')}})">
                <div class="row">
                 <div class="col-lg-9">
                     <h3 class="white">Do you want to be a teacher?</h3>
                     <p class="white">Freelancers and entrepreneurs Freelancers and entrepreneurs use about me to grow their audience and get more clients. Create a page to present who you are and what you do in one link. Use about.</p>
                     <a href="#">Submit your application</a>
                 </div>
                 <div class="col-lg-3">
                     <img src="{{asset('new-frontendv1/images/member-dashboard/member-post.png')}}" class="img-fluid" alt="">
                 </div>
                </div>
             </div>
            <div class="become-form">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Your First Name</label>
                                <input type="text" class="form-control" placeholder="Your First Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Your Last Name</label>
                                <input type="text" class="form-control" placeholder="Your Last Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Account Type</label>
                                <select name="" class="form-select" id="">
                                    <option value="0">Select catagoris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Professional Title</label>
                                <select name="" class="form-select" id="">
                                    <option value="0">Select catagoris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Your Country</label>
                                        <select name="" class="form-select" id="">
                                            <option value="0">Select catagoris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Your Number</label>
                                        <input type="text" class="form-control" placeholder="Your Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Additional data field</label>
                               <input type="text" class="form-control" placeholder="Type here">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Your Address</label>
                               <input type="text" class="form-control" placeholder="California, Us">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="#">Your Address</label>
                               <input type="text" class="form-control" placeholder="Select Time Zone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="#">About Your Self</label>
                                <div class="ic-ckeditor">
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="#">select CV</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="ic-buttons-become">
                                <button class="ic-btn rounded danger">Cancel</button>
                                <button class="rounded ic-btn-simple">Submit Application</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection