<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $table = 'contatos';
    protected $fillable = ['nome','telefone','foto','categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
   }
}
