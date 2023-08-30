@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <img src="{{$project->image}}" class="card-img-top" alt="{{$project->image}}"> --}}
                <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="{{$project->image}}">
                <div class="card-body text-center">
                  <h2>
                    {{$project->title}}--{{$project->type->name}}
                  </h2>
                  @if (count($project->tags)>0)
                  <h3>
                    @foreach ($project->tags as $tag)
                        {{$tag->name}}--
                    @endforeach
                  </h3>
                  @endif
                  
                  <h6 class="card-text">
                    {{$project->slug}}
                  </h6>
                  <a href="{{route('admin.project.index', $project)}}" class="btn btn-sm btn-success">View</a>
                  <form action="{{route('admin.project.destroy', $project)}}" class="d-inline-block" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection