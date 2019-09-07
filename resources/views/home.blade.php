@extends('layouts.app')
<!-- details card section starts from here -->
@section('content')

<div class="container">

        <div class="row">
        @foreach ($shops as $shop)
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{ asset($shop->photo) }}" alt="">
                        <span><h4>{{$shop->ShopName}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$shop->ShopName}}</h3>

                        @if(!$shop->favouritedBy(Auth::user()))
                        <br>
                            <a href="#" onclick="event.preventDefault();
                            document.getElementById('product-fav-form').submit();" class="btn-card">Like</a>
                            <form id="product-fav-form" class="hidden" action="{{ route('shops.fav.store', $shop) }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        @endif

                        <!-- <a href="#" class="btn-card2">dislike</a> -->
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>

@endsection
<!-- details card section starts from here -->
