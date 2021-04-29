@extends('frontend.master')
@section('title', 'Single Post')

@section('content')
    <section class="w3l-index2" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row mx-auto text-center">
                    <div class="col-lg-12 mt-lg-0 mt-5 text-left">
                        <h3 class="title-w3l"><span>{{$post->name}}</h3>
                        <p class="mt-4">{{$post->body}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
