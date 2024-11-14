<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'nama_siswa',
        'jekel',
        'grade',
        'status',
        'th_masuk'
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function savings() {
        return $this->hasOne(Saving::class);
    }

}
