<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Unidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'pessoas';
    protected $fillable = ['nome', 'email','documento','obsevacao','ativo', 'telefone','proprietario','morador','unidade_id', 'tag_id'];
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function unidade(): BelongsTo
    {
        return $this->belongsTo(Unidade::class);
    }
}
