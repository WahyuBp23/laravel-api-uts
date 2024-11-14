<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
        protected $fillable = [
        'id_tabungan',
        'nis',
        'setor',
        'tarik',
        'tgl',
        'jenis',
        'id_user'
    ];

    public function students() {
        return $this->belongsTo(Student::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }

}
