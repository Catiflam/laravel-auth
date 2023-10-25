@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content-header')
<h1 class="my-3">Lista Project</h1>
<a href="{{route('admin.projects.create')}}" class="btn btn-outline-primary">Crea project </a>
@endsection

@section('content')
  <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->created_at }}</td>
            <td>{{ $project->updated_at }}</td>
            <td>
                <a href="{{route('admin.projects.show',$project)}}"><i class="fa-solid fa-up-right-from-square"></i></a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6"><i>Non ci sono risultati</i></td>
        </tr>
        @endforelse
    </tbody>
</table>

  {{ $projects ->links('pagination::bootstrap-5') }}
@endsection