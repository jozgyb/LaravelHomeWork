@extends('layouts.app')
@section('content')
    <h4 align="center">View Photo</h4>
    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('gallery.index') }}" class="btn btn-success">Back</a>
        </div>
        <br />
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
        <h3>Title - {{ $data->title }} </h3>
    </div>
@endsection
