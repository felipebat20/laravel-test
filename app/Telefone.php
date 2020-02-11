<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefone extends Model
{
    protected $fillable = [
        'id',
        'ddd',
        'fone',
        'pessoa_id' 

    ];
    protected $table = 'telefones';

    public function pessoa(){
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

}
