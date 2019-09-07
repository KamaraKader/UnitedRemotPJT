@extends('layouts.app')
<!-- details card section starts from here -->
@section('content')
<div class="container">

        <div class="row">
        @if($products->count())
        @foreach($products as $product)
            <div class="col-md-4">

                <div class="card-content">
                    <div class="card-img">
                        <img src="{{ asset($product->photo) }}" alt="">
                            <span><h4>{{$product->ShopName}}</h4></span>
                    </div>
                <div class="card-desc">
                    <h3>{{$product->ShopName}}</h3>
                        <br>
                        <a href="#" onclick="event.preventDefault();
                            document.getElementById('product-fav-destroy-{{ $product->id }}').submit();" class="btn-card2">Dislike</a>
                                <form id="product-fav-destroy-{{ $product->id }}" action="{{ route('shops.fav.destroy', $product) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                        <!-- <a href="#" class="btn-card2">dislike</a> -->
                    </div>
                    </div>

                </div>

                @endforeach
            @else
            No favourite items found :(
            @endif
            </div>

    </div>
@endsection
<!-- details card section starts from here -->
