<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','email','isi'];

    public static function countPesan(){
        $data=Pesan::count();
        if($data){
            return $data;
        }
        return 0;
    }
}
