<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'user_id', 'room_id','zip','city','street','phone_number','party','pay','age','head',
    ];

    protected $dates = ['deleted_at'];

    public function room(){
        return $this->hasOne('App\Room', 'id', 'room_id');
    }
    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
