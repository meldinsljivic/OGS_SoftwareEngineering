<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public $items = null;

    public function addToWishlist($item, $id){
        if (Auth::check())
        {
            $id = Auth::user()->id;
            $currentuser = User::find($id);
        }



        $storedItem = ['quantity' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }
}
