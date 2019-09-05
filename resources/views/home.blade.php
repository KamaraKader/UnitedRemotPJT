@extends('layouts.app')
<!-- details card section starts from here -->
@section('content')
@foreach ($shops as $shop)
<div class="container">

        <div class="row">

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{ asset($shop->photo) }}" alt="">
                        <span><h4>{{$shop->ShopName}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$shop->ShopName}}</h3>
                        <br>
                            <a href="#" class="btn-card">Like</a>
                            <a href="#" class="btn-card2">dislike</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach
@endsection
<!-- details card section starts from here -->
