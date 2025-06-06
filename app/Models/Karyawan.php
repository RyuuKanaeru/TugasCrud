<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table ='karyawan';
    //protected $primarykey = 'id';
    protected $fillable =['nip','nama_karyawan','gaji_karyawan','alamat','departemen_id','jenis_kelamin','foto'];

    public function departemen(){

        return $this->belongsTo('App\Models\Departemen');
    }
}
