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
                        <img src="{{asset('/')}}assets/frontend/images/s2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->body}}</p>
                            <small class="float-left">12 hour</small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- //w3l-index2-->
@endsection
