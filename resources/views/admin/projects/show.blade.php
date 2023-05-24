@extends('layouts.app')
@section('page-title')

@section('content')
<img src="{{$project->cover_image}}" class="img-fluid" alt="{{$project->title}}">
<h1>{{$project->title}}</h1>
<h6><small>Slug: {{$project->slug}}</small></h6>
<h2>{{$project->description}}</h2>


<a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Torna alla lista</a>
@endsection
