@extends('layouts.app')
@section('content')
<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <h4 align="center">Upload image</h4>
    <div align="right">
        <a href="{{ route('gallery.index') }}" class="btn btn-success">Back</a>
    </div>
    <form method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4 text-right">Title of Image</label>
            <div>
                <input type="text" name="title" class="form-control input-lg" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <form method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Choose an image to upload:</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="fileToUpload">
                            <label class="custom-file-label" for="fileToUpload">Select an image</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="input-group-text" value="Upload" name="add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
@endsection
