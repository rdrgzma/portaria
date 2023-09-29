<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Acesso extends Model
{
    use HasFactory;
    protected $table = 'acessos';
    protected $fillable = ['data_entrada','data_saida', 'status','tag_id'];

     /**
     * Get the user that owns the Acesso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
