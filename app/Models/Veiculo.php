<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Veiculo extends Model
{
    use HasFactory;
    protected $table = 'veiculos';
    protected $fillable = ['marca','modelo','placa','box','ano', 'pessoa_id','tag_id'];
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}


