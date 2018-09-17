<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogProductTab extends Model
{

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'tab_id', 'value'];
}
