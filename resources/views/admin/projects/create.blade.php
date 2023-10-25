@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content-header')
<h1 class="my-3">Create post</h1>
<a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary">Torna alla lista </a>
@endsection

@section('content')

<form method="POST" action="{{route('admin.projects.store')}}" class="row">
  @csrf
  <div class="col-12 mb-4">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" name="title" id="title" class="form-control">
  </div>

  <div class="col-12 mb-4">
    <label for="content" class="form-label">Contenuto</label>
    <textarea type="text" name="content" id="content" class="form-control" rows="5"></textarea>
  </div>

  <div class="col-12 mb-4">
   <button class="btn btn-success">Salva</button>
  </div>
</form>

@endsection