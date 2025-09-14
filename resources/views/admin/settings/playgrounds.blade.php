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
                        Active/Inactive
                    </a>

                    <a class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#oneCompiler" type="button"
                        role="tab" aria-controls="support" aria-selected="false">
                        One Compiler
                    </a>
                    <a class="nav-link" id="aws-tab" data-bs-toggle="pill" data-bs-target="#awsCredentials" type="button"
                        role="tab" aria-controls="support" aria-selected="false">
                        Aws Configuration
                    </a>
                    <a class="nav-link" id="gcp-tab" data-bs-toggle="pill" data-bs-target="#gcp" type="button"
                        role="tab" aria-controls="gcp" aria-selected="false">
                        GCP Configuration
                    </a>
                    <a class="nav-link" id="azure-tab" data-bs-toggle="pill" data-bs-target="#azure" type="button"
                        role="tab" aria-controls="social" aria-selected="false">
                        Azure Configuration
                    </a>

                    {{--  <a class="nav-link" id="socialite-tab" data-bs-toggle="pill" data-bs-target="#socialite" type="button"
                        role="tab" aria-controls="socialite" aria-selected="false">
                        Lorem ipsum
                    </a>
                    <a class="nav-link" id="payment-tab" data-bs-toggle="pill" data-bs-target="#payment" type="button"
                        role="tab" aria-controls="payment" aria-selected="false">
                        Lorem ipsum
                    </a> --}}

                    <a class="nav-link" id="duration-tab" data-bs-toggle="pill" data-bs-target="#duration" type="button"
                        role="tab" aria-controls="duration" aria-selected="false">
                        Duration
                    </a>
                </div>
            </div>
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">
                <div class="card ic_box_shadow">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Active and Inactive -->
                            <div class="tab-pane fade show active" id="genral" role="tabpanel"
                                aria-labelledby="genral-tab" tabindex="0">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Playgrounds</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($playgrounds as $playground)
                                                    <tr>
                                                        <td> {{ $playground->title }} </td>
                                                        <td>

                                                            <a href="{{ route('admin.playground.activeDeactive', $playground->id) }}"
                                                                class="btn waves-effect waves-light {{ getGlobalStatusBg($playground->status) }}">{{ getGlobalStatusName($playground->status) }}</a>
                                                            <a href="{{ $playground->lab_url }}"
                                                                class="btn bg-dark waves-effect waves-light {{ getGlobalStatusBg($playground->status) }}">
                                                                <i class="ri-play-fill"></i>
                                                                Play
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- OC Settings -->
                            <div class="tab-pane fade" id="oneCompiler" role="tabpanel" aria-labelledby="commission-tab"
                                tabindex="0">
                                <form id="settings_update" method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.settings.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="oc_base_uri">One Compiler Base URI</label>
                                            <input type="text" class="form-control" name="oc_base_uri" id="oc_base_uri"
                                                placeholder="One Compiler Base URI"
                                                value="{{ config('settings.oc_base_uri') }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="oc_access_key">One Compiler Access Key</label>
                                            <textarea class="form-control" name="oc_access_key" id="oc_access_key" placeholder="One Compiler Access Key"
                                                autocomplete="off">{{ config('settings.oc_access_key') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                                    type="button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- AWS Settings -->
                            <div class="tab-pane fade" id="awsCredentials" role="tabpanel" aria-labelledby="aws-tab"
                                tabindex="0">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.settings.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="playground_domain">Playground Domain</label>
                                            <input type="text" class="form-control" name="playground_domain"
                                                id="playground_domain" placeholder="Playground Domain"
                                                value="{{ config('settings.playground_domain') }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="playground_domainhostedzoneid">Domain Hosted Zone ID</label>
                                            <input type="text" class="form-control"
                                                name="playground_domain_hosted_zone_id"
                                                id="playground_domain_hosted_zone_id" placeholder="Domain Hosted Zone ID"
                                                autocomplete="off"
                                                value="{{ config('settings.playground_domain_hosted_zone_id') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="aws_playground_region">Aws Playground Region</label>
                                            <input type="text" class="form-control" name="aws_playground_region"
                                                id="aws_playground_region" placeholder="Aws Playground Region"
                                                autocomplete="off"
                                                value="{{ config('settings.aws_playground_region') }}">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                                    type="button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- GCP Settings -->
                            <div class="tab-pane fade" id="gcp" role="tabpanel" aria-labelledby="gcp-tab"
                                tabindex="0">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.settings.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="gsuite_domain">Google Workspace Domain</label>
                                            <input type="text" class="form-control" name="gsuite_domain"
                                                id="gsuite_domain" placeholder="Domain name"
                                                value="{{ config('settings.gsuite_domain') }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="gcp_user_prefix">Google Workspace user prefix</label>
                                            <input type="text" class="form-control" name="gcp_user_prefix"
                                                id="gcp_user_prefix" placeholder="Google Workspace user prefix"
                                                autocomplete="off" value="{{ config('settings.gcp_user_prefix') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="gcp_app_name">Application Name</label>
                                            <input type="text" class="form-control" name="gcp_app_name"
                                                id="gcp_app_name" placeholder="App Name" autocomplete="off"
                                                value="{{ config('settings.gcp_app_name') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                                    type="button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Azure Settings -->
                            <div class="tab-pane fade" id="azure" role="tabpanel" aria-labelledby="azure-tab"
                                tabindex="0">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.settings.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="gsuite_domain">Azure Domain</label>
                                            <input type="text" class="form-control" name="azure_domain"
                                                id="azure_domain" placeholder="Domain name"
                                                value="{{ config('settings.azure_domain') }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="azure_user_prefix">Azure user prefix</label>
                                            <input type="text" class="form-control" name="azure_user_prefix"
                                                id="azure_user_prefix" placeholder="Google Workspace user prefix"
                                                autocomplete="off" value="{{ config('settings.azure_user_prefix') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="azure_app_name">Application Name</label>
                                            <input type="text" class="form-control" name="azure_app_name"
                                                id="azure_app_name" placeholder="App Name" autocomplete="off"
                                                value="{{ config('settings.azure_app_name') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                                    type="button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Socialite Settings -->
                            <div class="tab-pane fade" id="socialite" role="tabpanel" aria-labelledby="socialite-tab"
                                tabindex="0">
                            </div>
                            <!-- Payment Settings -->
                            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab"
                                tabindex="0">
                            </div>
                            <!-- Commission Settings -->
                            <div class="tab-pane fade" id="duration" role="tabpanel" aria-labelledby="duration-tab"
                                tabindex="0">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.settings.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="playground_duration">Playground Duration</label>
                                            <select class="form-control" name="playground_duration"
                                                id="playground_duration" autocomplete="off">
                                                @for ($i = 1; $i <= 24; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ config('settings.playground_duration') == $i ? 'selected' : '' }}>
                                                        {{ $i }} hour{{ $i > 1 ? 's' : '' }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-lightml-2 me-2"
                                                    type="button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End all tabs data -->
                        </div>
                    </div>
                </div>

            </div> <!-- end Col-9 -->
        </div>
    </div>
    <!-- content -->
@endsection
