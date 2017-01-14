<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class Page extends Model
{
    use SoftDeletes;
    use RevisionableTrait;

    protected $table = 'pages';
    protected $primaryKey = 'id';

    public function space() {
        return $this->belongsTo('App\Space');
    }
}
