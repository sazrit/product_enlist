<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
