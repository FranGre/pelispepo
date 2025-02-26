<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Str;

class Film extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'user_id', 'is_activated', 'title', 'description', 'release_date'];

    public function newUniqueId(): string
    {
        return (string) Str::uuid();
    }

    public function uniqueIds(): array
    {
        return ['id'];
    }

    public function genders(): BelongsToMany
    {
        return $this->belongsToMany(Gender::class, 'film_genders');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'film_user_likes');
    }
}
