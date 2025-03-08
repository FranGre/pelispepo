<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Str;

class Cover extends Model
{
    use HasUlids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'film_id', 'original_file_name', 'extension'];

    public function newUniqueId(): string
    {
        return (string) Str::uuid();
    }

    public function uniqueIds(): array
    {
        return ['id'];
    }
}
