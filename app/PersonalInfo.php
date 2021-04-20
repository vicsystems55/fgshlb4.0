<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    //

  
    protected $guarded=[];

    public function users()
    {
        # code...
        return $this->belongsTo('App\User', 'user_id');
    }

    public function docs()
    {
        # code...
        return $this->hasMany('App\DocumentUpload', 'docs_id');
    }
}
