<?php

namespace App;
use App\User;
use App\Account;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');

    }
    public function accounts()
    {
        return $this->hasMany('App\Account');

    }
}
