<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Model implements Authenticatable
{
    use  \Illuminate\Auth\Authenticatable;

    public function UserInformation()
    {
        return $this->hasOne('App\UserInformation');
    }

    public function Product()
    {
        return $this->hasMany('App\Product', 'user_id');
    }


    public function userType()
    {
        return $this->belongsTo('App\userType');
    }
}




/*****<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  /*****  protected $fillable = [
        'name','first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  /*****  protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserInformation()
    {
        return $this->hasOne('App\UserInformation');
    }

    public function Product()
    {
        return $this->hasMany('App\Product');
    }

}
