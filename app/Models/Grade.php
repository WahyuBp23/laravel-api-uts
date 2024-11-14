<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
       protected $fillable = [
        'grade'
    ];

    public function students() {
        return $this->belongsTo(Student::class);
    }

}
