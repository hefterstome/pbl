<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Warga extends Authenticatable
{
    use HasFactory;
    protected $table = 'warga';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama','email','password','no_hp'];

    public static function countWarga(){
        $data=Warga::count();
        if($data){
            return $data;
        }
        return 0;
    }
}
