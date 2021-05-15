@extends('layouts.app')
@section('content')
@auth
<?php if (Auth::user()->role==1 || Auth::user()->role==2){?>
    <div align="right">
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add +</a>
    </div>
<?php } ?>
@endauth
<div class="row">
    @foreach($images as $row)
        <div class="col-md-6 col-lg-4 col-xl-3">
          <a href="{{ route('gallery.show', $row->id) }}">
              <img src="{{ URL::to('/') }}/images/{{ $row->image }}"  style="width:100%" >
          </a>
          <div class="caption">
            <p><strong>Title: </strong>{{ $row->title}}</p>
          </div>
        @auth
        <?php if (Auth::user()->role==1 || Auth::user()->role==2){?>
          <form action="{{ URL::route('gallery.destroy',$row->id) }}" method="POST">
            <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-info">Edit </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger">Delete </button>
          </form>
        <?php } ?>
        @endauth
        </div>
    @endforeach
</div>
{{ $images->links('pagination::bootstrap-4') }}
@endsection
