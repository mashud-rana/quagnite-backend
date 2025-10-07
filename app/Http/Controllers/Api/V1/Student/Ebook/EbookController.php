<?php

namespace App\Http\Controllers\Api\V1\Student\Ebook;

use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Student;
use App\Models\Bootcamp;
use App\Models\CourseNote;
use App\Traits\ApiResponse;
use App\Models\BootcampNote;

use Illuminate\Http\Request;
use App\Models\EnrollBootcamp;
use App\Models\BootcampLecture;
use App\Rules\MatchOldPassword;
use App\Models\DiscussionComment;
use App\Services\Utils\ZoomService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\PaginatedResourceTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Services\Api\V1\Student\EbookService;
use App\Services\Api\V1\Student\CourseService;
use App\Services\Api\V1\Student\ProfileService;
use App\Services\Api\V1\Student\BootcampService;
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\Course\CourseResource;
use App\Http\Resources\Api\V1\Student\CourseSubjectResource;
use App\Http\Resources\Api\V1\Student\Review\ReviewResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Ebook\EnrolledEbookResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampNoteResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsCommentResource;

class EbookController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $ebookService;


    public function __construct(EbookService $ebookService)
    {
        $this->ebookService = $ebookService;

    }


    public function myEbooks(Request $request)
    {

        $ebooks = $this->ebookService->getMyEbooks(withRelations: ['ebook.category','student','ebook.user']);
        // return $ebooks;
        try {
            if (!$ebooks) {
                return $this->error('No ebooks found', 404);
            }

            $resource =  $this->paginatedResponse($ebooks, EnrolledEbookResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function download($uuid)
    {
        try {
            $ebook = Ebook::whereUuid($uuid)->firstOrFail();
            $path = $ebook->ebook_file;
            $disk = config('settings.storage_driver');

            if (Storage::disk($disk)->exists($path)) {
                $fileName = $ebook->title ?: pathinfo($path, PATHINFO_FILENAME);
                $fileExtension = pathinfo($path, PATHINFO_EXTENSION);
                $downloadFileName = str_replace(' ', '_', str_replace('.','',strtolower($fileName))) . '.' . $fileExtension;

                // Return as download (forces browser download with correct filename)
                return Storage::disk($disk)->download($path, $downloadFileName);
            } else {
                return response()->json(['error' => 'File not found.'], 404);
            }
        } catch (\Exception $e) {
            logger($e);
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }





}
