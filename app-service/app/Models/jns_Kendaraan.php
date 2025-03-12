<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jns_Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'jns_kendaraan';
    protected $primaryKey = 'id_jns_kendaraan';
    public $timestamps = false;

    protected $fillable = [
        'nm_jns_kendaraan',
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_jns_kendaraan');
    }

}
