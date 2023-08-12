@extends('layout.app')

@section('title')
    Home Page
@endsection

@section('content')
<div class="container mt-5">
    <div class="col-10 mx-auto bg-secondary-subtle">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>
                            Manage Users
                        </h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{asset('images/user.png.png')}}" alt="" height="250px" width="250px">
                    </div>
                  <a href="" class="btn btn-primary">Manage</a>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>
                            Manage comments
                        </h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{asset('images/no.png')}}" alt="" height="250px" width="250px">
                    </div>
                    <a href="{{route('comment')}}" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection