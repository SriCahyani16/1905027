<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria2 extends Model
{
    protected $table= 'subkriteria2';
    protected $fillable = [
        'id_kriteria',
        'nama'
    ];
}
