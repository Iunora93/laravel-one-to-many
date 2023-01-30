@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="py-4">
    <h1>{{$project->title}}</h1>
    @if ($project->types?->name)
    <h3>Tipo: {{$project->types->name}}</h3>
    @else 
    <h3>Non è presente la tipologia!</h3>
    @endif
    @if($project->cover_image)
    <img class="w-25" src="{{asset("storage/$project->cover_image")}}" alt="{{$project->title}}">
    @endif
    <div class="mt-4">
        {{$project->content}}
    </div>
  </div>
</div>
@endsection