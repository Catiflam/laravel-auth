@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content-header')
<h1 class="my-3">Crea Post</h1>
<a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary">
  <i class="fa-solid fa-arrow-left me-1"></i>
  Torna alla lista
</a>
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger" role="alert">
  Correggi i seguenti errori

  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form method="POST" action="{{route('admin.projects.store')}}" class="row">
  @csrf

  <div class="col-12 mb-4">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title') }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="col-12 mb-4">
      <label for="content" class="form-label">Contenuto</label>
      <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content') }}</textarea>
      @error('content')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="col-12 mb-4">
      <button class="btn btn-success">
        <i class="fa-solid fa-floppy-disk me-1"></i>
        Salva
      </button>
    </div>

</form>
@endsection