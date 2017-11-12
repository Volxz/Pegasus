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

    protected $fillable = [
        'user_id'
    ];

    public function isApproved()
    {
        return (bool) $this->approved;
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}