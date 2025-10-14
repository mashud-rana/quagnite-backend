<?php

namespace App\Services\Utils;

use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChunkFileService
{

    protected $disk;

    public function __construct()
    {
        $this->disk = config('settings.storage_driver');
    }

    public function moveUploadedFile(string $uploadedPath, string $movePath): string
    {
        $movePath = "uploads/" . $movePath;

        // For public storage
        if ($this->disk == 'public' && Storage::disk($this->disk)->move($uploadedPath, $movePath)) {
            return $movePath;
        }
        // for S3 storage
        if ($this->disk == 's3') {

            try {
                $contents = Storage::disk('public')->get($uploadedPath);
                $response = Storage::disk('s3')->put($movePath, $contents);

                // delete uploaded file
                Storage::disk('public')->delete($uploadedPath);

                if ($response) {
                    return $movePath;
                }else{
                    return false;
                }

            } catch (\Exception $e) {
                logger($e->getMessage());
                return false;
            }
        };

        return false;
    }

    public function storeFileInServer(Request $request, string $tmpDir)
    {
        $storeDir = $this->storeDiretory($tmpDir);

        $folder = uniqid() . '-' . now()->timestamp;
        $path = storage_path($storeDir  . $folder);
        if( $request->header('Upload-Length') < FILE_CHUNK_SIZE){

            $newFileName = Str::random(25) . "." . $request->file('file')->getClientOriginalExtension();
            $request->file('file')->storeAs(
                $tmpDir.$folder,
                $newFileName,
                'public'
            );
            session()->put('chunk_uploaded_file_name', $newFileName);

        }else{
            // Ensure the parent directory exists
            if (!file_exists(dirname($path))) {
                mkdir(dirname($path), 0777, true);
            }
            // Create the new directory
            mkdir($path, 0777, true);
            // Create the file.part inside the new directory for chunk uploads
            file_put_contents($path . '/file.part', '');
        }

        return $folder;
    }

    public function updateFileInServer(Request $request, $tmpDir)
    {
        $storeDir = $this->storeDiretory($tmpDir);

        $path = storage_path($storeDir . $request->query('patch') . '/file.part');

        try{

            File::append($path, $request->getContent());

            if (filesize($path) == $request->header('Upload-Length')) {
                $name = $request->header('Upload-Name');

                File::move($path, storage_path($storeDir . $request->query('patch') . '/' . $name));

                session()->put('chunk_uploaded_file_name', $name);
            }

        }catch(\Exception $e){
            logger($e->getMessage());

            return false;
        }

        return true;
    }


    public function deleteFileFromServer($tmpDir)
    {
        $storeDir = $this->storeDiretory($tmpDir);

        $path = storage_path($storeDir);

        if (is_dir($path)) {
            // Recursively delete the directory and its contents
            $this->deleteDirectory($path);

            return true;
        }

        return false;
    }

    /**
     * Recursively delete a directory and its contents.
     *
     * @param string $dir
     * @return bool
     */
    public function deleteDirectory($dir)
    {
        if (!file_exists($dir)) {
            return true;
        }

        if (!is_dir($dir)) {
            return unlink($dir);
        }

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if (!$this->deleteDirectory($dir . '/' . $item)) {
                return false;
            }
        }
        return rmdir($dir);
    }

    private function storeDiretory($tmpDir)
    {
        return 'app/public/' . $tmpDir;
    }
}
