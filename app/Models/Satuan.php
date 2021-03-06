<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $table = 'satuan';
    protected $fillable = [
        'nama_satuan'
    ];

    public function kebutuhan()
    {
        return $this->hasMany(Satuan::class, 'satuan_id', 'id');
    }
}
