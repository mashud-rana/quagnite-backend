@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ is_null($withdraw->note) ? 'Entry' : 'Update' }} Payout Information
                    </h4>
                    <form action="{{ route('admin.withdraw.request.payout.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $withdraw->id }}">
                        <input type="hidden" name="payout_type"
                            value="{{ is_null($withdraw->note) ? 'create' : 'update' }}">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Requested Amount: ${{ $withdraw->amount }} </label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payout Details <span class="error">*</span></label> <br>
                            <textarea name="note" class="form-control" required>{{ $withdraw->note ?? old('note') }}</textarea>
                            @error('note')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.withdraw.request') }}">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
