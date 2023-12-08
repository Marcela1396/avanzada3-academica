<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'docente';
    protected $primaryKey = 'codprofesor';
    public $timestamps = 'true';

    public function program(){
        return $this->belongsTo(Program::class, 'programa', 'codprograma');
    }

}
