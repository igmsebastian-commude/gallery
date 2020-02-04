@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="card" style="width: 12rem;">
            <img src="{{ $post->getFirstMediaUrl('post_images') }}" class="card-img-top" alt="{{$post->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{ $post->description }}</p>
            </div>
        </div>
        {{--  <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <img src={{ $post->getFirstMediaUrl('post_images') }}>

                    You are logged in!
                </div>
            </div>
        </div>  --}}
        @endforeach
    </div>

</div>
@endsection
