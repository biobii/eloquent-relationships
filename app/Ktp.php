<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    
    protected $table = 'ktp';
    protected $fillable = ['nomor', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
