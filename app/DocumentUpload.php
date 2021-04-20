<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentUpload extends Model
{
    //
    protected $guarded=[];

    public function users()
    {
        # code...
        return $this->belongsTo('App\User');
    }

    public function personal_info()
    {
        # code...
        return $this->belongsTo('App\PersonalInfo');
    }
}
