@extends('layouts.app')
@section('content')
<h1>Style-1:</h1>
<div align="right">
    <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add +</a>
</div>
<div class="row">
    @foreach($images as $row)
        <div class="col-md-6 col-lg-4 col-xl-3">
          <a href="{{ route('gallery.show', $row->id) }}">
              <img src="{{ URL::to('/') }}/images/{{ $row->image }}"  style="width:100%" >
          </a>
          <div class="caption">
            <p><strong>Title: </strong>{{ $row->title}}</p>
          </div>
          <form action="{{ URL::route('gallery.destroy',$row->id) }}" method="POST">
            <a href="{{ route('gallery.show', $row->id) }}" class="btn btn-success">Show </a>
            <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-info">Edit </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger">Delete </button>
          </form>
        </div>
    @endforeach
</div>
{{ $images->links('pagination::bootstrap-4') }}

<h1>Style-2:</h1>
<div align="right">
    <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add +</a>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th width="10%">Image</th>
        <th width="30%">Title</th>
        <th width="20%">Action</th>
    </tr>
    @foreach($images as $row)
    <tr>
        <td ><a href="{{ route('gallery.show', $row->id) }}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}"  width="100" /></a></td>
        <td>{{ $row->title }}</td>
        <td>
        <form action="{{ URL::route('gallery.destroy',$row->id) }}" method="POST">
          <a href="{{ route('gallery.show', $row->id) }}" class="btn btn-success">Show </a>
          <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-info">Edit </a>
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button class="btn btn-danger">Delete </button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $images->links('pagination::bootstrap-4') }}
@endsection

