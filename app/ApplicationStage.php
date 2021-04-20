<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationStage extends Model
{
    //
    protected $guarded = [];

    public function personalinfo()
    {
        # code...
        return $this->belongsTo('App\PersonalInfo');
    }

    public function users()
    {
        # code...
        return $this->belongsTo('App\User', 'user_id');
    }
}
