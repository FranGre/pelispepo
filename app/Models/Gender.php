<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Str;

class Gender extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'name'];

    public function newUniqueId(): string
    {
        return (string) Str::uuid();
    }

    public function uniqueIds(): array
    {
        return ['id'];
    }


    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_genders');
    }
}
