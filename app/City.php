<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public $timestamps = false;
    protected $fillable = ['name'];

    public function posts()
    {
        // final model, intermediate model, fk on user, fk on post, lk city, lk user
        return $this->hasManyThrough('App\Post', 'App\User', 'city_id', 'user_id', 'id', 'id');
    }

    public function user()
    {
        // related model, fk, lk
        return $this->hasOne('App\User');
    }

}
