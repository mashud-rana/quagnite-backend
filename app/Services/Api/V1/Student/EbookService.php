<?php

namespace App\Services\Api\V1\Student;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ebook;
use App\Models\Course;
use App\Models\Bootcamp;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\EnrollBootcamp;
use App\Models\DifficultyLevel;
use App\Models\EnrollEbook;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class EbookService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Ebook::class;
        $this->fileService = $fileService;
    }

    // public function getMyEbooks(
    //     array $selectedFields = ['*'],
    //     array $withRelations = []
    // )
    // {
    //     $request = request();

    //     $perPage = $request->get('per_page', 10);
    //     $search = $request->get('search');
    //     $highest = $request->get('highest');
    //     // logger($highest);
    //     // logger(is_bool($highest) ? 1 : 2);
    //     //   dd($highest);

    //     $query = EnrollEbook::where('user_id', auth()->id())
    //         ->select($selectedFields)
    //         ->with($withRelations)->latest();

    //     if ($search) {
    //         $query->where(function ($q) use ($search) {
    //             $q->whereHas('ebook', function ($q) use ($search) {
    //                 $q->where('title', 'like', "%{$search}%")
    //                     ->orWhere('price', 'like', "%{$search}%");
    //             });
    //         });
    //     }

    //     if (!is_null($highest)) {
    //         $direction = $highest == 'true' ? 'desc' : 'asc';

    //         $query->orderBy(
    //             Ebook::select('price')
    //                 ->whereColumn('ebooks.id', 'enroll_ebooks.ebook_id'),
    //             $direction
    //         );
    //     }

    //     return $query->paginate($perPage);
    // }


    public function getMyEbooks(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $highest = $request->get('highest');
        $newest = $request->get('newest');
        $bookAZ = $request->get('bookAZ');
        // logger($highest);
        // logger(is_bool($highest) ? 1 : 2);
        //   dd($highest);

        // $query = EnrollEbook::where('user_id', auth()->id())
        //     ->select($selectedFields)
        //     ->with($withRelations)->latest();

         $query = Ebook::query()
            ->whereHas('enroll_ebook', function($q){
                $q->where('user_id', auth()->id());
            })
            ->select($selectedFields)
            ->with($withRelations);

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                        ->orWhere('price', 'like', "%{$search}%");
            });
        }

        if ($highest) {
            $direction = $highest == 'true' ? 'desc' : 'asc';
            $query->orderBy('price', $direction);
        }
       if ($bookAZ) {
            $direction = $bookAZ == 'true' ? 'desc' : 'asc';
            // sort only by the first word of the title
            $query->orderByRaw("SUBSTRING_INDEX(title, ' ', 1) {$direction}");
        }
        // order by newest/oldest -> from enroll_ebooks.created_at
        if ($newest) {
            $direction = $newest === 'true' ? 'desc' : 'asc';

            $query->orderBy(
                EnrollEbook::select('created_at')
                    ->whereColumn('enroll_ebooks.ebook_id', 'ebooks.id')
                    ->where('user_id', auth()->id())
                    ->latest() // in case multiple enrolls
                    ->take(1),
                $direction
            );
        }

        return $query->paginate($perPage);
    }



}
