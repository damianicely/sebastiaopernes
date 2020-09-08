@extends('layouts.app')

@section('content')
<div class="container">
@can('isAdmin')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Photo Control</div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="mb-5" action="{{ route('photos.create') }}">
                    <button class="button is-link btn btn-dark btn-block" type="submit">
                        Add Photo
                    </button>
                </form>
{{-------------------------------------------------------------------}}
{{-- Costa Vicentina ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Costa Vicentina</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "costa vicentina")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

{{-------------------------------------------------------------------}}
{{-- Cape St Vincent ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Cape St Vincent</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "cape st vincent")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

{{-------------------------------------------------------------------}}
{{-- Storm Waves ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Storm Waves</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "storm waves")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

{{-------------------------------------------------------------------}}
{{-- Shorelines ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Shorelines</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "shorelines")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

{{-------------------------------------------------------------------}}
{{-- Skylines ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Skylines</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "Skylines")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

{{-------------------------------------------------------------------}}
{{-- Islands ------------------------------------------------}}
{{-------------------------------------------------------------------}}
<h5>Islands</h5>
                @foreach ($photos as $photo)
                @if ($photo->collection == "islands")
                    <div class="row">
                        <div class="col">
                            <a href="photos/x-{{ $photo->reference }}.jpg">
                                <img width="100px" src="/photos/t-{{ $photo->reference }}.jpg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <h4># {{ $photo->reference }}</h4>
                            <p>{{ $photo->description }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('photos.destroy', $photo->id )}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach


            </div>
            
        </div>
    </div>
</div>

@endcan
</div>
@endsection
