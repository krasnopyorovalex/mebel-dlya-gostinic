<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextBlock extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['text', 'sys_name', 'name'];
}
