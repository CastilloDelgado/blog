<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }    

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paragraphs(): HasMany
    {
        return $this->hasMany(Paragraph::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(PostImage::class, 'post_id');
    }
}
