<?php

namespace App\Models;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Encomenda extends Model
{
    use HasFactory;
    protected $table = 'encomendas';
    protected $fillable = ['entregador','identificacao','transportadora','data','volumes','status', 'pessoa_id'];
    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}
