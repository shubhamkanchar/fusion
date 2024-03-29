@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Batches List</h1>
        </div>
        <div class="col-md-12">
            <table id="myTable" class="table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Course Name</th>
                        <th>Seats</th>
                        <th>Fees</th>
                        <th>Duration</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td><img class="he-50 wi-50"src="{{ url('public/uploads/course').'/'.$d->file }}" alt="{{ $d->name }}"></td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->seats }}</td>
                        <td>{{ $d->fees }}</td>
                        <td>{{ $d->duration }}</td>
                        <th>{{ $d->course_status == 'on' ? 'Active' : 'Inactive'}}</th>
                        <td>
                            <a href="{{ route('admin.update_course',['id'=>$d->id]) }}" class="btn btn-primary" >Edit</a>
                            <a href="{{ route('admin.course_delete',['id'=>$d->id]) }}" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Course Name</th>
                        <th>Seats</th>
                        <th>Fees</th>
                        <th>Duration</th>
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
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection