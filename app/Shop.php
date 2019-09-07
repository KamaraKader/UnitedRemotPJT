<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['ShopName','photo'];

    public function favourites()
    {
    	return $this->morphToMany(User::class, 'prefereds');
    }

    /**
     * This will check if a particular user has favourited an shop
     */
    public function favouritedBy(User $user)
    {
    	return $this->favourites->contains($user);
    }
}
