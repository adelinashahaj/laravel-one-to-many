@extends('layouts.app')

@section('page-title')

@section('content')
<form method="POST" action="{{route('admin.projects.update', ['project'=>$project->slug])}}">

    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project->title)}}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description',$project->description)}} </textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="cover_image" class="form-label">Url dell'immagine:</label>
        <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image" value="{{ old('cover_image',$project->cover_image)}}" >
        @error('cover_image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
