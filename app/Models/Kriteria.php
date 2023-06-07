<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kriteria extends Model
{
    protected $table= 'kriteria';
    protected $fillable = [
        'kode_kriteria',
        'nama',
        'bobot',
    ];
    public function subkriteria():  HasMany
    {
        return $this->hasMany(Subkriteria::class);
    }
}
