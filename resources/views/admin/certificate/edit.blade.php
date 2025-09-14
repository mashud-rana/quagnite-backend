@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 ">
                            {{-- form start --}}
                            <form action="{{ route('admin.certificate.update', $certificate->uuid) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="accordion ic-admin-according" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Certificatte Top information
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body pt-0">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Name Title</label>
                                                            <input name="title" value="{{ $certificate->title ?? '' }}"
                                                                type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Website Link</label>
                                                            <input name="website" value="{{ $certificate->website ?? '' }}"
                                                                type="text" class="form-control"
                                                                placeholder="Website link">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Contact No</label>
                                                            <input name="tel" value="{{ $certificate->tel ?? '' }}"
                                                                type="text" class="form-control" placeholder="No">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="#">Email</label>
                                                            <input type="email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="#">Number</label>
                                                            <input type="number" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                        <div class="form-group">
                                                            <label for="#">Color</label>
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Certificate Name Change
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Name</label>
                                                            <input name="name" value="{{ $certificate->name ?? '' }}"
                                                                type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="#">Color</label>
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Certificate Body Text
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Body text</label>
                                                            <textarea name="body_text" class="form-control" id="" placeholder="Body text">{{ $certificate->body_text ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="#">Color</label>
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Certificate Founder text change
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Founder Text</label>
                                                            <input name="founder"
                                                                value="{{ $certificate->founder ?? '' }}" type="text"
                                                                class="form-control" placeholder="Founder Text">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="#">Color</label>
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Certificate Date change
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Date</label>
                                                            <input name="date" value="{{ $certificate->date ?? '' }}"
                                                                type="date" class="form-control" placeholder="Date">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="#">Color</label>
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Certificate Signature change
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="#">Signature</label>
                                                            <input name="signature" type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary ">Update</button>
                                    <a href="{{ route('admin.certificate') }}" class="btn btn-danger ">Back</a>
                                </div>
                            </form>
                            {{-- form end --}}
                        </div>
                        <div class="col-xl-8">
                            <div class="table-responsive">
                                <div class="ic-certificate-pdf">
                                    <table
                                        style="background-image: url({{ asset('new-frontendv1/images/certificate.jpg') }}); width: 100%; background-size: cover; background-repeat: no-repeat;">
                                        <tr>
                                            <td>
                                                <table style="width: 100%">
                                                    <tr>
                                                        <td>
                                                            <div style="padding-top: 70px; text-align: center;">
                                                                <p
                                                                    style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                                                    {{ $certificate->title ?? '' }}</p>
                                                                <p
                                                                    style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                                                    Website: <a href="#"
                                                                        style="font-size: 12px; color: #009CBD; font-weight: 600;">{{ $certificate->website ?? '' }}</a>
                                                                </p>
                                                                <p
                                                                    style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                                                    Tel: <a href="#"
                                                                        style="font-size: 12px; color: #009CBD; font-weight: 600;">{{ $certificate->tel ?? '' }}</a>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table style="width: 100%;">
                                                    {{-- name --}}
                                                    <tr>
                                                        <td>
                                                            <h1
                                                                style="font-size: 50px; line-height: 60px; color: #265780; font-family: 'Dancing Script', cursive; text-align: center; padding-top: 200px;">
                                                                {{ $certificate->name ?? '' }}
                                                            </h1>
                                                        </td>
                                                    </tr>
                                                    {{-- body --}}
                                                    <tr>
                                                        <td>
                                                            <p
                                                                style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; padding: 0 81px; text-align: center;     padding-top: 50px;">
                                                                {{ $certificate->body_text ?? '' }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    {{-- Founder --}}
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center; padding-bottom: 30px">
                                                                <img src="{{ asset('new-frontendv1/images/logo-certificate.png') }}"
                                                                    alt="logos">
                                                            </div>
                                                            <p
                                                                style="
                                                            padding: 0 81px; color: #265780;
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                            text-align: center;
                                                            ">
                                                                {{ $certificate->founder ?? '' }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 30px 81px 52px;">
                                                            <table style="width: 100%;">
                                                                <tr>
                                                                    {{-- Date --}}
                                                                    <td>
                                                                        <div style="width: 80px; text-align: center;">
                                                                            <span
                                                                                style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">{{ $certificate->date ?? '' }}</span>
                                                                            <div
                                                                                style="width: 80px; border-top: 1px solid #6F91AD;">
                                                                            </div>
                                                                            <span
                                                                                style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">Date</span>
                                                                        </div>
                                                                    </td>
                                                                    {{-- signature --}}
                                                                    <td>
                                                                        <div
                                                                            style="width: 100px; text-align: center; margin-left: auto">
                                                                            <span
                                                                                style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">

                                                                            </span>
                                                                            <div
                                                                                style="width: 80px; border-top: 1px solid #6F91AD;">
                                                                            </div>
                                                                            <span
                                                                                style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">
                                                                                Signature</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
@endpush

@push('scripts')
@endpush
