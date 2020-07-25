<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cartorios extends Model
{
    protected $table = 'cartorios';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome',
        'razao',
        'tipo_documento',
        'documento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'email',
        'telefone',
        'tabeliao',
        'ativo',
        'user_id',
    ];

    public function tipo_documento()
    {
        return $this->hasOne(TipoDocumento::class, 'id', 'tipo_documento');
    }

    public function OwnerCreated()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}