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

                @foreach ($photos as $photo)
                <div class="row">
                    <div class="col">
                        <a href="{{ $photo->file_path }}">
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
                @endforeach
            </div>
            
        </div>
    </div>
</div>

@endcan
</div>
@endsection
