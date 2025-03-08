<?php

namespace App\Services\Cover;

class CoverStorageService
{
    public $definitivePath;

    public function __construct()
    {
        $this->definitivePath = public_path('storage/covers');
    }
}
