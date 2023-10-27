<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the comment or reply.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the parent post that owns the comment or reply.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the comments or replies for post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Post::class, 'parent_id');
    }
}
