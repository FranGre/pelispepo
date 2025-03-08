<?php

namespace App\Services\Cover;

class CoverTemporaryStorageService
{
    public $temporalPath;

    public function __construct()
    {
        $this->temporalPath = storage_path('/app/tmp/covers');
    }
}
