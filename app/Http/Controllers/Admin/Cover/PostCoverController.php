<?php

namespace App\Http\Controllers\Admin\Cover;

use App\Http\Controllers\Controller;
use App\Services\Cover\CoverTemporaryStorageService;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class PostCoverController extends Controller
{
    protected CoverTemporaryStorageService $coverTemporaryStorageService;

    public function __construct(CoverTemporaryStorageService $coverTemporaryStorageService)
    {
        $this->coverTemporaryStorageService = $coverTemporaryStorageService;
    }

    public function __invoke(Request $request)
    {
        $file = $request->file('cover');

        if (!$file->extension() == 'webp') {
            return response('Solo se permite la extensión .webp', 400);
        }

        $temporalPath = $this->coverTemporaryStorageService->temporalPath;

        if (!File::exists($temporalPath)) {
            File::makeDirectory($temporalPath);
        }

        $filename = (string) Str::uuid() . "." . $file->extension();

        $file->move($temporalPath, $filename);

        return response('ok');
    }
}
