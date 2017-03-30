<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'verkoop';
    protected $fillable = array(
        'totaalbedrag',
        'klant_id'
    );


}
