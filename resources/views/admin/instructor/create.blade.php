@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ request()->id ? 'Update instructor' : 'Add instructor' }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_instructor') }}" method="post" id="Addinstructor" enctype='multipart/form-data'>
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="name">instructor Title</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="name">instructor image</label>
                    <input class="form-control @error('file')  is-invalid @enderror" type="file" name="file" id="file" value="{{ $data['file'] ?? ''}}">
                    @error('file')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row form-group">
                    <label>Select course:</label>
                    <select name="course" rows="5" placeholder="Enter select course" class="form-control input-sm">
                        <option></option>
                        @foreach($course as $c)
                        <option {{ isset($data["course"]) && !empty($data["course"]) && $data["course"] == $c->name ? 'selected' : '' }} >{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ request()->id ? 'Update instructor' : 'Add instructor' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection