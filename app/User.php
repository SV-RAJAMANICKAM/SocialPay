<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'type', 'password', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function get_type()
    {
        if ($this->type=="M") {
            return "M";
        }elseif($this->type=="F"){
            return "F";
        }else{
            return "A";
        }
    }

    public function get_name(){
        return $this->name;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_phone(){
        return $this->phone;
    }
}
