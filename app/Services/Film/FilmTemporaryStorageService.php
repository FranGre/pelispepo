<?php

namespace App\Services\Film;

class FilmTemporaryStorageService
{
    public $temporalPath;

    public function __construct()
    {
        $this->temporalPath = storage_path('/app/tmp/films');
    }
}
