@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach($profiles as $profile)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$profile->first_name}}{{$profile->last_name}}</h5>
                        <p class="card-text">{{$profile->bio}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$profile->user->email}}</li>
                        <li class="list-group-item">{{$profile->academic_level}}</li>
                        <li class="list-group-item">{{$profile->caste}}</li>
                        <li class="list-group-item">{{$profile->employed}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
