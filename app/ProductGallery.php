<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'photos','products_id'
    ];

    protected $table = 'products_galleries';

    /**
     * The attributes that should be hidden for arrays.
     *
     */
    protected $hidden = [
        
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id','id');
    }
}
