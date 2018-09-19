<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadySolutionTab extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['rs_id', 'tab_id', 'value'];
}
