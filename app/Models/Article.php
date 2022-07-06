<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function articleTags(): BelongsToMany
    {
        return $this->belongsToMany(ArticleTag::class, 'articles_article_tags');
    }

    public function attachTags($tags)
    {
        $tagIds = [];
        if ($tags !== null) {
            foreach ($tags as $tag) {
                if ( $articleTag = ArticleTag::where('tag', $tag)->first() ) {
                    $tagIds[] = $articleTag->id;
                    continue;
                }

                $newTag = ArticleTag::firstOrCreate(compact('tag'));
                $tagIds[] = $newTag->id;
            }
        }

        $this->articleTags()->sync($tagIds);
        return;
    }
}
