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

    public function index(Request $request)
	{
		$products = $request->user()->favouriteShops()->get();
		return view('fav', compact('products'));
	}

    public function store(Request $request, Shop $shop)
    {
        $request->user()->favouriteShops()->syncWithoutDetaching([$shop->id]);

        return back();
    }

    public function destroy(Request $request, Shop $product)
    {
    	$request->user()->favouriteShops()->detach($product);
    	return back();
    }
}
