<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Shop, User};

class ShopController extends Controller
{

    public function __construct()
	{
		$this->middleware(['auth']);
    }

    // function to get all shop liked by a user
    public function index(Request $request)
	{
		$products = $request->user()->favouriteShops()->get();
		return view('fav', compact('products'));
	}

    // function to store the shops liked by a user
    public function store(Request $request, Shop $shop)
    {
        $request->user()->favouriteShops()->syncWithoutDetaching([$shop->id]);

        return back();
    }

    // function to remove shop from the preferred shop list of an user
    public function destroy(Request $request, Shop $product)
    {
    	$request->user()->favouriteShops()->detach($product);
    	return back();
    }
}
