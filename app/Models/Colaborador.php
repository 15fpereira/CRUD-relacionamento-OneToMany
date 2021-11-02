<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $fillable = [
        'nome', 'cargo','departamento_id'
    ];
    use HasFactory;
    public function departamento()
    {
        return $this->hasOne(Departamento::class);
    }
}
