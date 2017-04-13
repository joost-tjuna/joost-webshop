<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class new_products extends Model {

    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = array(
        'name',
        'stock',
        'price',
        'picture',
        'description'

    );

    public $timestamps = false;

}