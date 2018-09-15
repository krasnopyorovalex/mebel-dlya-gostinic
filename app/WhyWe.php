<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhyWe extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'icon', 'link', 'pos'];
}
