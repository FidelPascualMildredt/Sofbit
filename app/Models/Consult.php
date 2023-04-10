<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function medico()
    {
        return $this->belongsTo(User::class,'medico_id','id');
    }

    public function paciente()
    {
        return $this->belongsTo(User::class,'paciente_id','id');
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class,'prescription_id','id');
    }
}
