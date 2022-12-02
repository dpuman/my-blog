@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card" style="">
                            <img src="{{asset($blog->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$blog->title}}</h5>
                                <p class="card-text">{{$blog->short_description}}</p>
                                <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
