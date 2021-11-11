<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $fillable = [
        // chave estrageira padrão: _id
        // O Eloquent tentará encontrar um "Departamento" modelo que tenha um idque corresponda à post_idcoluna do Commentmodelo.
        // cargo_at é o cargo atual do colaborador
        'nome', 'cargo', 'cargo_at', 'departamento_id'

    ];
    use HasFactory;
    /**
     * Get the colaborador that owns the Colaborador
     * Importante que o nome da chave estrageira seja o mesmo nome do metodo seguido de _id.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
