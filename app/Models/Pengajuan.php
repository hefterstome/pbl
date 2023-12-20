<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $primaryKey = 'no_kk';
    protected $keyType = 'char';
    protected $guarded = [];
    public $incrementing = false;

    public static function countPengajuan(){
        $data=Pengajuan::count();
        if($data){
            return $data;
        }
        return 0;
    }
    

    // Ini untuk beranda dashboard
    // public static function countPengajuan(){
    //     $data=Pengajuan::count();
    //     if($data){
    //         return $data;
    //     }
    //     return 0;
    // }
}
