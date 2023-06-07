<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subkriteria extends Model
{
    protected $table= 'subkriteria';
    protected $fillable = [
        'id_kriteria',
        'nama',
        'jenis',
        'nilai'
    ];
    public function kriteria(): BelongsTo
    {
        return  $this->belongsTo(Kriteria::class);
    }
}
