<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResturantOrdersDetail extends Model
{
    /*
      |--------------------------------------------------------------------------
      | GLOBAL VARIABLES
      |--------------------------------------------------------------------------
      */

    protected $table = 'resturant_orders_detail';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'master_id',
        'advertisement_id',
        'price',
        'details_price',
        'quantity',
        'discount',
        'total_price',
        'currency_id',
        'notes'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function master() {}

    public function advertisement() {
        return $this->belongsTo(Advertisement::class);
    }

    public function currency() {}

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
