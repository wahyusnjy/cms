<title>Articles</title>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h5>List Of Articles</h5>
        <div class="card-header">
        <a href="{{ url('/article/create') }}" class="btn btn-primary">Create</a>
        </div>
        @foreach($article as $a)
        <div class="card mx-4" style="width: 18rem; ">
            <img src="{{ url('/assets/images/'. $a->image ) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $a->title }}</h5>
              <p class="card-text">{{ $a->content }}</p>
              <a href="{{ url('/article/edit/'. $a->id) }}" class="btn btn-primary">Edit</a>
              <a href="{{ url('/article/destroy/'. $a->id) }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
          @endforeach
    </div>
</div>

@endsection
