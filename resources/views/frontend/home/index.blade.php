@extends('frontend.master')
@section('title', 'Home')

@section('content')

<!--/w3l-index2-->
<section class="w3l-index2" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row mx-auto text-center">

                @foreach($posts as $post)
                <div class="col-md-3 ">
                    <div class="card">
                        <img src="{{$post->img_url}}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <a href="{{route('frontend.posts.show', $post->id)}}"><h5 class="card-title">{{$post->name}}</h5></a>
{{--                            <a href="{{url('/posts', $post->id)}}"><h5 class="card-title">{{$post->name}}</h5></a>--}}

                            <p class="card-text">{!! substr(strip_tags($post->body),0,70)."..." !!}</p>
                            <small class="float-left">12 hour</small>
                            <small class="float-right">{{$post->category->name}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row d-flex justify-content-center pt-5">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</section>
<!-- //w3l-index2-->
@endsection
