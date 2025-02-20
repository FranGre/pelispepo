<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'user_id', 'title', 'description', 'release_date'];

    public function genders(): BelongsToMany
    {
        return $this->belongsToMany(Gender::class, 'film_genders');
    }
}
