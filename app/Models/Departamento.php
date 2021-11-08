<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];
    use HasFactory;
        /**
     * 
     * Neste caso, o metodos precisa estar no plural. Mostra todos os colaboradores do departamento.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function colaboradors()
    {
        return $this->hasMany(Colaborador::class);
        //return $this->belongsTo(Colaborador::class);

    }
}
