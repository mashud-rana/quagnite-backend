<?php

namespace App\Http\Controllers\Student\Ebook;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use App\Models\EnrollEbook;
use Illuminate\Support\Facades\Storage;

class EbookController extends Controller
{
    public function index()
    {
        set_page_meta('My Ebooks');

        $data['ebooks'] = EnrollEbook::where('user_id', auth()->id())->with('ebook')->get();

        return view('student.ebook.index', $data);
    }

    public function download($uuid)
    {
        try {
            $ebook = Ebook::whereUuid($uuid)->firstOrFail();
            $path = $ebook->ebook_file;
            $disk = config('settings.storage_driver');

            if (Storage::disk($disk)->exists($path)) {
                $fileContents = Storage::disk($disk)->get($path);
                $fileName = $ebook->title ?: pathinfo($path, PATHINFO_FILENAME);
                $fileExtension = pathinfo($path, PATHINFO_EXTENSION);
                $downloadFileName = $fileName.'.'.$fileExtension;

                return response($fileContents)
                    ->header('Content-Type', Storage::disk($disk)->mimeType($path))
                    ->header('Content-Disposition', 'inline; filename="'.$downloadFileName.'"');
            } else {
                return back()->with('error', 'File not found.');
            }
        } catch (\Exception $e) {
            logger($e);

            return back();
        }
    }
}
