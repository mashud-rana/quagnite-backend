<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Services\Utils\FileService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrixEditorController extends Controller
{
    protected $disk;
    public function __construct(
        private FileService $fileService,
    ) {
        $this->disk = config('settings.storage_driver');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required',
        ]);

        //Upload file and get the file path
        $path = $this->fileService->upload($request->file('file'), 'trix');

        // Refactor the file path with aws cdns link
        // $url = getStoreFile($path);
        $defaultDiskUrl = Storage::disk($this->disk)->url($path);

        return response()->json([
            'url' => $defaultDiskUrl,
            'path' => $path
        ]);
    }


    public function delete(Request $request)
    {
        $validated = $request->validate([
            'file_path' => 'required',
        ]);

        //delete file from located storage
        $isDeleted = $this->fileService->delete($request->file_path);

        if ($isDeleted) {
            // File deletion was successful
            return response()->json(['message' => 'File deleted successfully'], 200);
        } else {
            // File deletion failed
            return response()->json(['message' => 'Unable to delete the file'], 500);
        }
    }
}
