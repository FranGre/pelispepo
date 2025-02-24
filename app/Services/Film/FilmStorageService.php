<?php

namespace App\Services\Film;

class FilmStorageService
{
    public $definitivePath;

    public function __construct()
    {
        $this->definitivePath = public_path('storage/films');
    }
}
