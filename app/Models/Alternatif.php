<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table= 'alternatif';
    protected $fillable = [
        'id_test',
        'no_test',
        'nama',
        'jk',
        'asal_sekolah'

    ];
}
