<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function isApproved()
    {
        return (bool) $this->approved;
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

}