@extends('layout.app')

@section('title')
    comment section
@endsection

@section('content')
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-header text-center">
                Comment section
            </div>
            <div class="card-body">
                <form action="{{route('post')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control" name="comment" placeholder="Enter Your Comment Here">
                            </div>
                            <div class="col-2">
                                <input type="submit" class="btn btn-secondary" value="Post">
                            </div>
                        </div>
                        </div>
                </form>
                        <hr>

                        @foreach($comments as $comment)
                        <div class="card mt-4">
                            <div class="card-header d-flex justify-content-between">
                            <div><strong>{{$comment['name']}}</strong> - <small class="text-muted">{{$comment['time']}}</small></div>
                            <div class="text-danger">x</div>
                            </div>
                            <div class="card-body">
                                {{$comment['body']}}
                            </div>
                        </div>
                        @endforeach
            </div>
        </div>
    </div>
@endsection