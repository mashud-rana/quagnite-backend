@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Add New Role</h4>
                    <div class="row">
                        <div class="col-md-8">

                            <form action="{{ route('admin.roles.store') }}" method="POST" id="form">
                                @csrf

                                <div class="form-group mb-2">
                                    <label for="name">Role Name <span class="error">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        autocomplete="off" placeholder="Enter Role Name" value="{{ old('name') }}"
                                        required>
                                </div>

                                <div class="form-group mb-2">
                                    <strong>Permission <span class="error">*</span></strong>
                                    <br />
                                    <div class="form-check">
                                        <h5>
                                            <input class="form-check-input provide-full-slect" type="checkbox"
                                                id="check" onClick="permissionAll(this)">
                                            <label class="form-check-label" for="check">
                                                All Permission
                                            </label>
                                        </h5>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- Permission --}}
                                            @foreach ($permissions as $permission)
                                                <div class="form-group ic-single-permission @if (!empty($permission->parent_id)) ic-child-permission parent-{{ $permission->parent_id }} @else ic-parent-permission @endif"
                                                    @if (empty($permission->parent_id)) data-id="{{ $permission->id }}" @endif>
                                                    <label
                                                        class="ic-permission-label @if (empty($permission->parent_id)) ic-parent-permission-label @endif()">
                                                        <input
                                                            @if (!empty($permission->parent_id)) class="child-permission-{{ $permission->parent_id }}" @endif
                                                            value="{{ $permission->name }}" name="permission[]"
                                                            type="checkbox">
                                                        <span class="ml-1">{{ $permission->name }}</span>

                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div>
                                        <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                            <i class="fa fa-save"></i> Submit
                                        </button>

                                        @can('All Roles')
                                            <a class="btn btn-secondary waves-effect" href="{{ route('admin.roles.index') }}">
                                                <i class="fa fa-times"></i> Cancel
                                            </a>
                                        @endcan
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // rol permission
            $('.team-check, .provide-full-slect-tictk').on("click", function() {
                $('.team-all-select, .provide-full-slect').prop('checked', this.checked);
            });

            $('.team-all-select, .provide-full-slect').on("click", function() {
                var check = ($('.team-all-select, .provide-full-slect').filter(":checked").length == $(
                    '.team-all-select, .provide-full-slect').length);
                $('.team-check, .provide-full-slect-tictk').prop("checked", check);
            });

            // show and close group of permission
            const parentPermission = $(".ic-parent-permission");
            parentPermission.on("click", function() {
                const parentId = $(this).data('id');
                const childPermission = "." + "parent-" + parentId;

                if ($(childPermission).css('display') == 'none') {
                    $(childPermission).css('display', 'block');
                } else {
                    $(childPermission).css('display', 'none');
                }
            });

            // select all group wise permission by clicking
            $(".ic-parent-permission-label").change(function() {

                const parentId = $(this).parent().data('id');
                const parentCheckBox = $(this).find('input[type=checkbox]')[0];
                const childClassName = "." + "child-permission-" + parentId;
                const childCheckBox = $(childClassName);

                if (parentCheckBox.checked) {
                    if (childCheckBox) {
                        for (let i = 0; i < childCheckBox.length; i++) {
                            const checkBox = childCheckBox[i];
                            checkBox.checked = true;
                        }
                    }
                } else {
                    if (childCheckBox) {
                        for (let i = 0; i < childCheckBox.length; i++) {
                            const checkBox = childCheckBox[i];
                            checkBox.checked = false;
                        }
                    }
                }
            });

            // Default hide
            $('.ic-child-permission').css('display', 'none');
        });

        // check all permission in one click
        function permissionAll(source) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != source) checkboxes[i].checked = source.checked;
            }
        }
    </script>
@endpush
