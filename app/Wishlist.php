<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'id_product'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
   
    
}
