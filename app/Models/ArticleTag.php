<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ArticleTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
