<?php

namespace App\Services\Utils;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    protected $disk;

    public function __construct()
    {
        $this->disk = config('settings.storage_driver');
    }

    public function upload(UploadedFile $file, ?string $folder = null): string
    {
        // check file name if not given assign a name
        $filename = time().Str::random(25);

        // check folder name if not given assign a name
        if (is_null($folder)) {
            $folder = 'files';
        }

        return $file->storeAs(
            'uploads/'.$folder,
            $filename.'.'.$file->getClientOriginalExtension(),
            $this->disk
        );
    }

    public function delete(?string $path = null)
    {
        // Check if the path contains "demo"
        if (strpos($path, 'demo') !== false) {
            // If "demo" is present, return without performing deletion
            return true;
        }

        // Check if the file exists before attempting to delete it
        if (Storage::disk($this->disk)->exists($path)) {
            return Storage::disk($this->disk)->delete($path);
        }

        // Return false if the file does not exist
        return false;
    }
}
