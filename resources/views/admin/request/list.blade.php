@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Batches List</h1>
        </div>
        <div class="col-md-12">
            <!-- <table border="0" cellspacing="5" cellpadding="5">
                <tbody>
                    <tr>
                        <td>Minimum date:</td>
                        <td><input type="date" id="min" name="min" date-format="MMMM DD YYYY"></td>
                    </tr>
                    <tr>
                        <td>Maximum date:</td>
                        <td><input type="text" id="max" name="max"></td>
                    </tr>
                </tbody>
            </table> -->
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
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

                            @if(auth()->user()->type == 'admin' && $d->status == 'Completed')
                            <a href="{{ route('admin.request_delete',['id'=>$d->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
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
            var date = new Date(data[4]);

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

    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'MMMM Do YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'MMMM Do YYYY'
        });

        // DataTables initialisation
        var table =  $('#myTable').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    'excelHtml5'
                ]
            });
        
        // Refilter the table
        $('#min, #max').on('change', function() {
            table.draw();
        });
    });
</script>
@endsection