
@extends('master')
@section('title')
    Comments
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">All Comments</div>
                        <p class="text-success">{{Session::get('message')}}</p>

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Comment</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$comment->comment}}</td>

                                        <td>{{$comment->status == 1 ? 'Published' : 'Unpublished'}}</td>

                                        <td style="">

                                            <form action="{{route('comment.publish',['id'=>$comment->id])}}" method="post" >
                                                @csrf
                                                <button type="submit"  class="btn btn-outline-success btn-sm">Publish</button>
                                            </form>

                                            <form action="{{route('comment.unpublish',['id'=>$comment->id])}}" method="post" >
                                                @csrf
                                                <button type="submit"  class="btn btn-outline-success btn-sm">Unpublished</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
