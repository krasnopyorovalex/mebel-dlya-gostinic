<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RSImage extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['rs_id', 'name', 'alt', 'title', 'basename', 'ext', 'is_published', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rs()
    {
        return $this->belongsTo('App\ReadySolution');
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return asset('storage/rs/' . $this->rs_id . '/' . $this->basename . '_thumb.' . $this->ext);
    }
}
