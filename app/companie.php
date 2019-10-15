<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $table = 'companies';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}