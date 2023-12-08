<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'codprograma';
    public $timestamps = 'true';

    public function faculties(){
        return $this->belongsTo(Faculty::class, 'facultad', 'codfacultad');
    }

    public function teachers(){
        return $this->hasMany(Teacher::class, 'codprofesor');
    }

}
