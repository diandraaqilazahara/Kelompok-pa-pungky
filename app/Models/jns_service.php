<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jns_service extends Model
{
    use HasFactory;

    protected $table = 'jns_service';
    protected $primaryKey = 'id_jns_service';
    public $timestamps = false;

    protected $fillable = [
        'jns_service',
        'keterangan',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'id_jns_service');
    }

}
