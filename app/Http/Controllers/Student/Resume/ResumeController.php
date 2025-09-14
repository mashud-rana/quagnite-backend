<?php

namespace App\Http\Controllers\Student\Resume;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Services\Utils\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public $fileUploadService;

    public function __construct(protected FileService $fileService)
    {
    }

    public function index()
    {
        set_page_meta('My Resumes');
        $resumes = Resume::where('user_id', auth()->id())->get();

        return view('student.resume.index', ['resumes' => $resumes]);
    }

    public function uploadResume(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:10000',
            'title' => 'required|string|max:255',
        ]);

        if ($request->hasFile('file')) {
            $user_id = auth()->id();
            $uploadedFile = $request->file('file');

            // Upload the file
            $file = $this->fileService->upload($uploadedFile, 'resumes');

            // Create resume record
            Resume::create([
                'user_id' => $user_id,
                'title' => $request->title,
                'file' => $file,
            ]);

            record_updated_flash('Resume uploaded successfully!');
        } else {
            something_wrong_flash('No file was uploaded. Please try again.');
        }

        return back();
    }

    public function download($uuid)
    {
        try {
            $resume = Resume::whereUuid($uuid)->firstOrFail();
            $path = $resume->file;
            $disk = config('settings.storage_driver');

            if (Storage::disk($disk)->exists($path)) {
                $fileContents = Storage::disk($disk)->get($path);
                $fileName = $resume->title ?: pathinfo($path, PATHINFO_FILENAME);
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

    public function deleteResume($id)
    {
        $resume = Resume::find($id);

        if (! $resume || $resume->user_id != auth()->id()) {
            something_wrong_flash('Resume not found');

            return redirect()->back();
        }

        // Delete the file from the server
        $this->fileService->delete($resume->file);

        // Delete the resume record from the database
        $resume->delete();
        record_deleted_flash('Resume deleted successfully!');

        return redirect()->back();
    }
}
