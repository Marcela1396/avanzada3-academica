<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'facultad';
    protected $primaryKey = 'codfacultad';
    public $timestamps = 'true';

    public function programs(){
        return $this->hasMany(Program::class, 'codprograma');

    }

}
