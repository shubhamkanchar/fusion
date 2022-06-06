@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ request()->id ? 'Update Batch' : 'Add Batch' }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_batch') }}" method="post" id="AddBatch">
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="name">Batch course Title</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="date">Batch starting Date</label>
                        <input class="form-control  @error('name')  is-invalid @enderror" type="date" name="date" id="date" value="{{ $data['date'] ?? ''}}">
                        @error('date')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="time">Batch time</label>
                        <input class="form-control  @error('time')  is-invalid @enderror" type="time" name="time" id="time" value="{{ $data['time'] ?? ''}}">
                        @error('time')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="duration">Batch duration (in month's)</label>
                        <input class="form-control  @error('duration')  is-invalid @enderror" type="text" name="duration" id="duration" value="{{ $data['duration'] ?? ''}}">
                        @error('duration')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name">Batch Days</label>
                    <select class="form-control  @error('days')  is-invalid @enderror" type="text" name="days" id="days" value="{{ $data['days'] ?? ''}}">
                        <option></option>
                        <option {{ isset($data) && ($data['days'] == 'Daily') ? 'selected' : '' }}>Daily</option>
                        <option {{ isset($data) && ($data['days'] == 'Weekday') ? 'selected' : '' }}>Weekday</option>
                        <option {{ isset($data) && ($data['days'] == 'Weekend') ? 'selected' : '' }}>Weekend</option>
                        <option {{ isset($data) && ($data['days'] == 'Only saturday') ? 'selected' : '' }}>Only saturday</option>
                        <option {{ isset($data) && ($data['days'] == 'Only sunday') ? 'selected' : '' }}>Only sunday</option>
                    </select>
                    @error('days')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ request()->id ? 'Update Batch' : 'Add Batch' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('model')
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection