<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
<script>
    $(document).ready(function() {
        var table = $('#dataTableBuilder').DataTable();

        // Select/Deselect all checkboxes
        $('#select-all').on('click', function() {
            var rows = table.rows({
                'search': 'applied'
            }).nodes();
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });

        $(document).on('change', '.select-row', function() {
            if (!this.checked) {
                $('#select-all').prop('checked', false);
            }
        });

        // Apply bulk action
        $('#apply-bulk-action').on('click', function() {
            var action = $('#bulk-action').val();
            if (!action) {
                alert('Please select an action.');
                return;
            }

            var selectedIds = [];
            $('.select-row:checked').each(function() {
                selectedIds.push($(this).val());
            });

            if (selectedIds.length === 0) {
                alert('Please select at least one item.');
                return false;
            }

            $('#action_type').val(action);
            $('<input>').attr({
                type: 'hidden',
                name: 'ids',
                value: JSON.stringify(selectedIds)
            }).appendTo('#bulk-action-form');

            $('#bulk-action-form').submit();
        });
    });
</script>
