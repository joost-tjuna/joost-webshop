<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'stock','price', 'picture','description',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */




}