<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SeoBlock
 *
 * @property int $id
 * @property string $name
 * @property string $sys_name
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SeoBlock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SeoBlock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SeoBlock whereSysName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SeoBlock whereValue($value)
 * @mixin \Eloquent
 */
class SeoBlock extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'sys_name', 'value'];
}
