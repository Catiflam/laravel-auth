@extends('layouts.app')

@section('content-header')
<h1 class="my-3">{{$project->title}}</h1>
<a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary">Torna alla lista </a>
@endsection

@section('content')
  <div class="row g-5 mt-3">
    <div class="col-4">
      <p>
        <strong>Slug</strong> <br>
        {{$project->slug}}
      </p>
    </div>
    <div class="col-4">
      <p>
        <strong>Created at</strong> <br>
        {{$project->created_at}}
      </p>
    </div>
    <div class="col-4">
      <p>
        <strong>Updated at</strong> <br>
        {{$project->updated_at}}
      </p>
    </div>
    <div class="col-12">
      <strong>Content</strong> <br>
        {{$project->content}}
    </div>
  </div>
@endsection