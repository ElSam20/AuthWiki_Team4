<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model
};
use Illuminate\Support\Facades\Auth;

class Wiki extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'stack',
        'file_dir',
        'title',
        'content',
        'views',
        'viewed_at',
        'downloads',
        'downloaded_at'
    ];
    protected $appends = [
        'comments',
        'stars',
        'stared'
    ];
    protected $casts = [
        'viewed_at' => 'datetime',
        'downloaded_at' => 'datetime'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comment() {
        return $this->hasMany(Comment::class);
    }
    public function reaction()
    {
        return $this->hasMany(Reaction::class);
    }

    public function getCommentsAttribute() {
        return $this->comment()->count();
    }
    public function getStarsAttribute()
    {
        return floor($this->reaction()->where('comment_id', null)->avg('rating') * 20);
    }
    public function getStaredAttribute() {
        return $this->reaction()->where(['comment_id' => null, 'user_id' => Auth::id()])->exists();
    }
}
