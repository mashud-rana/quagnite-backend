@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- organization --}}
    <div class="ic-organization-main">
        <div>
            <aside class="ic-organization-sidebar">
                <ul>
                    <li>
                        <a href="#" class="active"><i class="ri-dashboard-2-line"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-key-2-line"></i> Credentials</a>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="content-right">
            <div class="section-headers pt-0">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Credentials</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
                <div>
                    <button class="ic-btn-simple">Create Credenttials</button>
                </div>
            </div>
            <div class="mt-3">
                <table class="ic-tables">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Creation Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <p>API key</p>
                        </td>
                        <td>
                            Nov 1, 2023
                        </td>
                        <td>
                            <button class="ic-my-buttons" data-bs-target="#exampleModal" data-bs-toggle="modal">Show Key</button>
                            <button class="ic-my-buttons bg-info text-white">Generate key</button>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- organization --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">API Key</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Use this key in ypur application by passing it whith the <code>Key=API_KEY</code>Parameter.</p>
                <div class="form-group mt-3">
                    <div class="position-relative ic-copy-link">
                        <input type="text" class="form-control overflow-hidden" placeholder="Your API key" value="AfadfsdAGASOUHJBBBGF-asKAHSDUIQGWRBASflkhsdfh">
                        <button type="button"> <i class="ri-file-copy-line"></i></button>
                    </div>
                </div>
                <button type="button" class="ic-btn-simple danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
