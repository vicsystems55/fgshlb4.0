<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    //
    protected $guarded=[];

    public function users()
    {
        # code...
        return $this->belongsTo('App\User');
    }
}
