@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ request()->id ? 'Update Course' : 'Add Course' }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_course') }}" method="post" id="AddCourse" enctype='multipart/form-data'>
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="name">Course Title</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="file">Course image</label>
                    <input class="form-control @error('file')  is-invalid @enderror" type="file" name="file" id="file" value="{{ $data['file'] ?? ''}}">
                    @error('file')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="pdf">Course PDF</label>
                    <input class="form-control @error('pdf')  is-invalid @enderror" type="file" name="pdf" id="pdf" value="{{ $data['pdf'] ?? ''}}">
                    @error('pdf')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="lang">Course language</label>
                    <input class="form-control @error('lang')  is-invalid @enderror" type="lang" name="lang" id="lang" value="{{ $data['lang'] ?? ''}}">
                    @error('lang')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="seats">Total Seats</label>
                        <input class="form-control  @error('seats')  is-invalid @enderror" type="number" name="seats" id="seats" value="{{ $data['seats'] ?? ''}}">
                        @error('seats')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="fees">Fees</label>
                        <input class="form-control  @error('fees')  is-invalid @enderror" type="number" name="fees" id="fees" value="{{ $data['fees'] ?? ''}}">
                        @error('fees')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="duration">duration (in month's)</label>
                        <input class="form-control  @error('duration')  is-invalid @enderror" type="number" name="duration" id="duration" value="{{ $data['duration'] ?? ''}}">
                        @error('duration')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc">Course Description</label>
                    <textarea class="form-control  @error('desc')  is-invalid @enderror" name="desc" id="desc">{{ $data['desc'] ?? ''}}</textarea>
                    @error('desc')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="for">Who this course is for</label>
                    <textarea class="form-control  @error('for')  is-invalid @enderror" name="for" id="for">{{ $data['for'] ?? ''}}</textarea>
                    @error('for')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="syllabus">Syllabus</label>
                    <textarea class="form-control  @error('syllabus')  is-invalid @enderror" name="syllabus" id="syllabus">{{ $data['syllabus'] ?? ''}}</textarea>
                    <small class="is-invalid">Note : Enter comma ( , ) seperated value</small>
                    @error('syllabus')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="pre">Requirement / Prerequisite</label>
                    <textarea class="form-control  @error('pre')  is-invalid @enderror" name="pre" id="pre">{{ $data['pre'] ?? ''}}</textarea>
                    <small class="is-invalid">Note : Enter comma ( , ) seperated value</small>
                    @error('pre')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="tools">Tools</label>
                    <textarea class="form-control  @error('tools')  is-invalid @enderror" name="tools" id="tools">{{ $data['tools'] ?? ''}}</textarea>
                    <small class="is-invalid">Note : Enter comma ( , ) seperated value</small>
                    @error('tools')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ request()->id ? 'Update Course' : 'Add Course' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection