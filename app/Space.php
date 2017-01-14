<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model
{
    use SoftDeletes;

    protected $table = 'spaces';
    protected $primaryKey = 'id';

    public function pages() {
        return $this->hasMany('App\Page');
    }
}
