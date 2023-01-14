@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Batches List</h1>
        </div>
        <div class="col-md-12 table-responsive">
            <table border="0" cellspacing="5" cellpadding="5" class="mb-3" style="width:100%">
                <tbody>
                    <tr>
                        <td>Minimum date:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Maximum date:</td>
                        <td><input type="text" id="max" name="max"></td>
                        <td class="text-end">
                            <button class="btn btn-danger btn-sm delete-bulk">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><input type="checkbox" name="select_all" value="" class="select_all"></th>
                        <th>type</th>
                        <th>name</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>course</th>
                        <th>message</th>
                        <th>timestamp</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>
                            @if($d->status == 'Completed')
                            <input type="checkbox" name="selected_id" value="{{$d->id}}" class="request select-checkbox">
                            @endif
                        </td>
                        <td>{{ $d->type }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->mobile }}</td>
                        <td>{{ $d->course }}</td>
                        <td>{{ $d->message }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->status }}</td>
                        <td>
                            @if($d->status == 'New' && auth()->user()->type == 'admin')
                            <a href="{{ route('admin.request_update',['id'=>$d->id]) }}" class="btn btn-primary btn-sm mb-1">Mark Completed</a>
                            @elseif($d->status == 'New' && auth()->user()->type == 'manager')
                            <a href="{{ route('manager.request_update',['id'=>$d->id]) }}" class="btn btn-primary btn-sm mb-1">Mark Completed</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        @if(auth()->user()->type == 'admin')
                        <th>select</th>
                        @endif
                        <th>type</th>
                        <th>name</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>course</th>
                        <th>message</th>
                        <th>timestamp</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@section('jspage')
<script>
    var minDate, maxDate;

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[7]);
            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );

    $('.delete-bulk').on('click', function() {
        let yourArray = [];
        $("input:checkbox[name=selected_id]:checked").each(function() {
            yourArray.push($(this).val());
        });
        if (yourArray.length == 0) {
            alert('Please select atleast on request');
        } else {
            $.ajax({
                url: '{{ route("admin.selected_delete") }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'yourArray': yourArray
                },
                method: 'POST',
                success: function(res) {
                    if (res.status == 1) {
                        toastr.success(res.msg);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                }
            });
        }
    });

    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'YYYY-MM-DD'
        });
        maxDate = new DateTime($('#max'), {
            format: 'YYYY-MM-DD'
        });

        // DataTables initialisation
        var table = $('#myTable').DataTable({
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0,
                checkboxes: {
                    selectRow: true
                }
            }],
            dom: "<'row'<'col-sm-2 btn'B><'col-sm-6 pt-2'l><'col-sm-4 pt-2'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-6'i><'col-sm-6'p>>",
            buttons: [{
                extend: 'excelHtml5',
                className: "btn btn-success",
                text:'Download report'
            }]
        });

        // Refilter the table
        $('#min, #max').on('change', function() {
            table.draw();
        });

        $('.select_all').on('click', function() {
            if ($(this).is(":checked")) {
                $(".request").prop('checked', true);
            } else {
                $(".request").prop('checked', false);
            }
        });
    });
</script>
@endsection