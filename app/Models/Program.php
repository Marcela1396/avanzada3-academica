<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'codprograma';
    public $timestamps = 'true';

    public function faculty(){
        return $this->belongsTo(Faculty::class, 'facultad', 'codfacultad');
    }

    public function teacher(){
        return $this->hasMany(Teacher::class, 'codprofesor');
    }
}
