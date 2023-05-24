@extends('layouts.app')

@section('page-title', 'Elenco di types')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Slug</th>
        <th scope="col">Numero di proggeti</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($types as $type)
            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>{{$type->slug}}</td>
                <td>{{count($type->projects)}} @if(count($type->projects) > 0)
                  
                  @foreach ($projects as $project )
                  <h6>{{$project->name}}</h6>

                  @endforeach
                  @endif</td>

            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
