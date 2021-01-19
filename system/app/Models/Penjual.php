<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\user;
use App\MOdels\UserDetail;

class Penjual extends Authenticatable
{
    protected $table = 'penjual';
    use HasFactory, Notifiable;

    function detail(){
    	return $this->hasone(UserDetail:: class, 'id_user');

    }

    function produk(){
    	return $this->hasMany(Produk:: class, 'id_user');
    }

    function getJenisKelaminStringAttribute(){
    	return ($this->jenis_kelamin == 1) ? "Laki-Laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value){
    	$this->attribute['username'] = strtolower($value);
    }


}
