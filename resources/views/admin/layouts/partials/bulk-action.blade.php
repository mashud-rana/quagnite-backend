<div id="bulk-action-container" class="mb-3" style="display: none;">
    <div class="btn-group">
        <select id="bulk-action" class="form-select">
            <option value="" disabled selected>Select Action</option>
            @foreach ($actions as $action)
                @if ($action === 'delete' || in_array($action, $statuses))
                    <option value="{{ $action }}">{{ ucfirst($action) }} Selected</option>
                @endif
            @endforeach
        </select>
        <button type="button" id="apply-bulk-action" class="btn btn-primary">Apply</button>
    </div>
</div>

<form id="bulk-action-form" method="post" action="{{ route('admin.bulkAction', ['model' => $model]) }}">
    @csrf
    <input type="hidden" name="action_type" id="action_type" value="">
    <input type="hidden" name="status_field" value="{{ $statusField }}">
    {{ $slot }}
</form>
