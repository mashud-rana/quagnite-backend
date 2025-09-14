<?php

namespace App\Services\Course;

use App\Http\Requests\Course\CourseLectureDeleteRequest;
use App\Http\Requests\Course\CourseStoreLectureRequest;
use App\Http\Requests\Course\CourseStoreLessonRequest;
use App\Http\Requests\Course\CourseStoreRequest;
use App\Http\Requests\Course\CourseUpdateLectureRequest;
use App\Http\Requests\Course\CourseUpdateRequest;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLanguage;
use App\Models\CourseLecture;
use App\Models\CourseLesson;
use App\Models\CourseTag;
use App\Models\DifficultyLevel;
use App\Models\Tag;
use App\Services\Utils\ChunkFileService;
use App\Services\Utils\FileService;
use App\Services\Utils\VimeoService;
use getID3;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseCreateService
{
    public function __construct(
        protected FileService $fileService,
        protected VimeoService $vimeoService,
        private ChunkFileService $chunkFileService
    ) {
    }

    public function getDataForCreateOrUpdateCourse(): array
    {
        $data['courseLanguages'] = CourseLanguage::select('id', 'title')->get();
        $data['difficultyLevels'] = DifficultyLevel::select('id', 'title')->get();
        $data['courseCategories'] = CourseCategory::select('id', 'name')->get();
        $data['tags'] = Tag::select('id', 'name')->get();

        return $data;
    }

    public function getCourseById(string $id)
    {
        return Course::findOrFail($id);
    }

    public function getLectureById(string $id)
    {
        return CourseLecture::findOrFail($id);
    }

    public function getCourseByUuid(string $uuid)
    {
        return Course::whereUuid($uuid)->firstOrFail();
    }

    public function getAllLessonByCourseId(string $course_id)
    {
        return CourseLesson::whereCourseId($course_id)->with('lecture')->withCount('lecture')->withSum('lecture', 'file_duration_second')->get();
    }

    public function storeCourse(CourseStoreRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;
        // upload image and video
        $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'course/images') : null;
        // $data['video'] = $request->hasFile('video') ? $this->fileService->upload($request->file('video'), 'course/videos') : null;

        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'course/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
            } else {
                $data['video'] = null;
            }
        }

        $course = DB::transaction(function () use ($data) {

            if (isset($data['tag_id'])) {
                $tags = $data['tag_id'];
                unset($data['tag_id']);
            } else {
                $tags = [];
            }
            // store Course data
            $course = Course::create($data);

            // store course tag
            foreach ($tags as $tag) {

                $course->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            return $course;
        }, $retryCount = 5);

        return $course;
    }

    public function updateCourse(CourseUpdateRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        $course = $this->getCourseById($data['course_id']);

        // upload image and video
        if ($request->hasFile('image')) {
            $data['image'] = $this->fileService->upload($request->file('image'), 'course/images');
        }

        // if ($request->hasFile('video')) {
        //     $data['video'] = $this->fileService->upload($request->file('video'), 'course/videos');
        // }

        if (isset($data['video']) && $fileName = session()->get('chunk_uploaded_file_name')) {

            $uploadedFilePath = $tmpDirectory .  $data['video'] . '/' . $fileName;
            $newFileName = $data['video'] . '-' . $fileName;

            $response = $this->chunkFileService->moveUploadedFile($uploadedFilePath, 'course/videos/' . $newFileName);

            if ($response) {
                $data['video'] = $response;
                // delete old video
                if ($course->video) {
                    $this->fileService->delete($course->video);
                }
            } else {
                $data['video'] = null;
            }
        }

        $course = DB::transaction(function () use ($data, $course) {

            // unset and store tags
            if (isset($data['tag_id'])) {
                $tags = $data['tag_id'];
                unset($data['tag_id']);
            } else {
                $tags = [];
            }
            // unset course id
            unset($data['course_id']);
            // store Course data
            $course->update($data);

            // Delete previous course tags
            $course->tags()->delete();
            // store course tag
            foreach ($tags as $tag) {
                $course->tags()->create([
                    'tag_id' => $tag
                ]);
            }

            return $course;
        }, $retryCount = 5);

        return $course;
    }

    public function storeCourseLesson(CourseStoreLessonRequest $request)
    {
        $data = $request->validated();

        $courseLesson = CourseLesson::create($data);

        return $courseLesson;
    }

    public function storeCourseLecture(CourseStoreLectureRequest $request, $tmpDirectory)
    {
        $data = $request->validated();

        try {
            // upload file
            if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO) {

                $video_id = $this->vimeoService->UploadToVimeo($request->file('file'));
                $data['vimeo_path'] = intval($video_id);
            } else {
                if ($fileName = session()->get('chunk_uploaded_file_name')) {
                    $uploadedFilePath = $tmpDirectory .  $data['file'] . '/' . $fileName;
                    $newFileName = $data['file'] . '-' . $fileName;
                } else {
                    logger('Chunk uploaded file name is missing');
                    something_wrong_flash();
                    return false;
                }

                // merge file size and duration info if file is video
                if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO || $data['lecture_format'] === LECTURE_FORMAT_VIDEO) {
                    // count file duration
                    $data['file_duration_second'] = ($data['video_mintues'] * 60) + $data['video_seconds'];
                    $data['file_duration'] = (int) ceil($data['file_duration_second'] / 60);

                    unset($data['video_mintues'], $data['video_seconds']);
                    // $data = array_merge($data, $this->getUploadedFileSizeDuration($uploadedFilePath));
                }

                $movedFilePath = $this->moveChunkFilesByLectureFormat($data['lecture_format'], $uploadedFilePath, $newFileName);

                // check file uploaded or not
                if (!$this->arrayHasNonEmptyValue($movedFilePath)) {
                    logger('Course uploaded path is missing!');
                    something_wrong_flash();
                    return false;
                }
                // merge upload data info
                $data = array_merge($data, $movedFilePath);
            }
        } catch (\Exception $e) {
            logger($e->getMessage());

            something_wrong_flash();

            return false;
        }

        // remove uploaded file from array
        unset($data['file']);

        // store course lesson
        $courseLecture = CourseLecture::create($data);

        return $courseLecture;
    }

    // public function storeCourseLecture(CourseStoreLectureRequest $request)
    // {
    //     $data = $request->validated();


    //     try {
    //         // upload file
    //         if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO) {

    //             $video_id = $this->vimeoService->UploadToVimeo($request->file('file'));
    //             $data['vimeo_path'] = intval($video_id);
    //         } else {

    //             $uploadFilePath = $this->uploadFilesByLectureFormat($data['lecture_format'], $request->file('file'));

    //             // check file uploaded or not
    //             if (in_array('', $uploadFilePath)) {
    //                 something_wrong_flash();

    //                 return false;
    //             }
    //             // merge upload data info
    //             $data = array_merge($data, $uploadFilePath);
    //         }

    //         // merge file size and duration info if file is video
    //         if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO || $data['lecture_format'] === LECTURE_FORMAT_VIDEO) {
    //             $data = array_merge($data, $this->getFileSizeDuration($request->file('file')));
    //         }
    //     } catch (\Exception $e) {
    //         logger($e->getMessage());

    //         something_wrong_flash();

    //         return false;
    //     }

    //     // remove uploaded file from array
    //     unset($data['file']);

    //     // store course lesson
    //     $courseLecture = CourseLecture::create($data);

    //     return $courseLecture;
    // }

    public function updateCourseLecture(CourseUpdateLectureRequest $request, $tmpDirectory)
    {
        $data = $request->validated();
        $courseLecture = CourseLecture::findorFail($data['lecture_id']);

        // update file duration
        if (isset($data['video_mintues']) && isset($data['video_seconds'])) {
            // count file duration
            $data['file_duration_second'] = ($data['video_mintues'] * 60) + $data['video_seconds'];
            $data['file_duration'] = (int) ceil($data['file_duration_second'] / 60);
            // unset unnessary keys
            unset($data['video_mintues'], $data['video_seconds']);
        }

        try {
            // if file upload
            if (isset($data['file']) && isset($data['lecture_format'])) {

                // Delete previous file
                $lecture = $this->getLectureById($data['lecture_id']);

                $this->deleteLectureFile($lecture);

                // upload file
                if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO) {

                    $video_id = $this->vimeoService->UploadToVimeo($request->file('file'));
                    $data['vimeo_path'] = intval($video_id);
                } else {

                    if ($fileName = session()->get('chunk_uploaded_file_name')) {
                        $uploadedFilePath = $tmpDirectory .  $data['file'] . '/' . $fileName;
                        $newFileName = $data['file'] . '-' . $fileName;
                    } else {
                        logger('Chunk uploaded file name is missing');
                        something_wrong_flash();
                        return false;
                    }

                    // merge file size and duration info if file is video
                    // if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO || $data['lecture_format'] === LECTURE_FORMAT_VIDEO) {

                    // $data = array_merge($data, $this->getUploadedFileSizeDuration($uploadedFilePath));
                    // }

                    $movedFilePath = $this->moveChunkFilesByLectureFormat($data['lecture_format'], $uploadedFilePath, $newFileName);

                    // check file uploaded or not
                    if (!$this->arrayHasNonEmptyValue($movedFilePath)) {
                        logger('Course uploaded path is missing!');
                        something_wrong_flash();
                        return false;
                    }
                    // merge upload data info
                    $data = array_merge($data, $movedFilePath);
                }
                // remove uploaded file from array
                unset($data['file']);
            }
        } catch (\Exception $e) {

            logger($e->getMessage());

            something_wrong_flash();

            return false;
        }
        // unset cz there is no lecture_id column
        unset($data['lecture_id']);
        // Update course lesson
        $courseLecture->update($data);

        return $courseLecture;
    }
    // public function updateCourseLecture(CourseUpdateLectureRequest $request)
    // {
    //     $data = $request->validated();
    //     $courseLecture = CourseLecture::findorFail($data['lecture_id']);

    //     try {
    //         // if file upload
    //         if ($request->hasFile('file') && isset($data['lecture_format'])) {

    //             // Delete previous file
    //             $lecture = $this->getLectureById($data['lecture_id']);

    //             $this->deleteLectureFile($lecture);

    //             // upload file
    //             if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO) {

    //                 $video_id = $this->vimeoService->UploadToVimeo($request->file('file'));
    //                 $data['vimeo_path'] = intval($video_id);
    //             } else {

    //                 $uploadFilePath = $this->uploadFilesByLectureFormat($data['lecture_format'], $request->file('file'));

    //                 // check file uploaded or not
    //                 if (in_array('', $uploadFilePath)) {
    //                     something_wrong_flash();

    //                     return false;
    //                 }

    //                 // merge upload data info
    //                 $data = array_merge($data, $uploadFilePath);
    //             }

    //             // merge file size and duration info if file is video
    //             if ($data['lecture_format'] === LECTURE_FORMAT_VIMEO || $data['lecture_format'] === LECTURE_FORMAT_VIDEO) {
    //                 $data = array_merge($data, $this->getFileSizeDuration($request->file('file')));
    //             }

    //             // remove uploaded file from array
    //             unset($data['file']);
    //         }
    //     } catch (\Exception $e) {

    //         logger($e->getMessage());

    //         something_wrong_flash();

    //         return false;
    //     }
    //     // unset cz there is no lecture_id column
    //     unset($data['lecture_id']);
    //     // Update course lesson
    //     $courseLecture->update($data);

    //     return $courseLecture;
    // }

    public function uploadFilesByLectureFormat(string $format, UploadedFile $file): array
    {
        switch ($format) {

            case LECTURE_FORMAT_VIDEO:
                $data['video_path'] = $this->fileService->upload($file, 'course/videos');
                break;

            case LECTURE_FORMAT_IMAGE:
                $data['image_path'] = $this->fileService->upload($file, 'course/images');
                break;

            case LECTURE_FORMAT_PDF:
                $data['pdf_path'] = $this->fileService->upload($file, 'course/pdfs');
                break;

            case LECTURE_FORMAT_SLIDE:
                $data['slide_path'] = $this->fileService->upload($file, 'course/slides');
                break;

            case LECTURE_FORMAT_AUDIO:
                $data['audio_path'] = $this->fileService->upload($file, 'course/audios');
                break;

            default:
                $data['file_path'] = $this->fileService->upload($file, 'course/others');
        }

        return $data;
    }

    public function moveChunkFilesByLectureFormat(string $format, string $uploadedPath, string $fileName): array
    {
        switch ($format) {

            case LECTURE_FORMAT_VIDEO:
                $data['video_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/videos/' . $fileName);
                break;

            case LECTURE_FORMAT_IMAGE:
                $data['image_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/images/' . $fileName);
                break;

            case LECTURE_FORMAT_PDF:
                $data['pdf_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/pdfs/' . $fileName);
                break;

            case LECTURE_FORMAT_SLIDE:
                $data['slide_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/slides/' . $fileName);
                break;

            case LECTURE_FORMAT_AUDIO:
                $data['audio_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/audios/' . $fileName);
                break;

            default:
                $data['file_path'] = $this->chunkFileService->moveUploadedFile($uploadedPath, 'course/others/' . $fileName);
        }

        return $data;
    }

    public function getFileSizeDuration(UploadedFile $file): array
    {
        //size
        $video_size = $file->getSize();
        $data['file_size'] = round($video_size / 1024 / 1024, 1);
        // duration
        $getID3 = new getID3;
        $file = $getID3->analyze($file);

        $data['file_duration_second'] = isset($file['playtime_seconds']) ? (int) round($file['playtime_seconds'], 1) : 0;
        $data['file_duration'] = (int) ceil($data['file_duration_second'] / 60);

        return $data;
    }

    public function getUploadedFileSizeDuration($filePath): array
    {
        // duration
        $getID3 = new getID3;
        $file = $getID3->analyze(storage_path('app/public/' . $filePath));
        $data['file_size'] = $file['filesize'] ?? 0;
        $data['file_duration_second'] = isset($file['playtime_seconds']) ? (int) round($file['playtime_seconds'], 1) : 0;
        $data['file_duration'] = (int) ceil($data['file_duration_second'] / 60);

        return $data;
    }

    public function deleteLecture(CourseLectureDeleteRequest $request)
    {
        $lecture = $this->getLectureById($request->lecture_id);

        $this->deleteLectureFile($lecture);

        $lecture->delete();

        return true;
    }

    public function deleteLectureFile(CourseLecture $lecture)
    {
        switch ($lecture->lecture_format) {

            case LECTURE_FORMAT_VIDEO:
                $this->fileService->delete($lecture->video_path);
                break;

            case LECTURE_FORMAT_VIMEO:
                $this->vimeoService->deleteVideo($lecture->vimeo_path);
                break;

            case LECTURE_FORMAT_IMAGE:
                $this->fileService->delete($lecture->image_path);
                break;

            case LECTURE_FORMAT_PDF:
                $this->fileService->delete($lecture->pdf_path);
                break;

            case LECTURE_FORMAT_SLIDE:
                $this->fileService->delete($lecture->slide_path);
                break;

            case LECTURE_FORMAT_AUDIO:
                $this->fileService->delete($lecture->audio_path);
                break;

            default:
                $this->fileService->delete($lecture->file_path);
        }
    }

    public function isVimeoUploaded($videoId)
    {
        return $this->vimeoService->CheckVideoUploadStatus($videoId);
    }

    function arrayHasNonEmptyValue($data)
    {
        foreach ($data as $value) {
            if (!empty($value)) {
                return true;
            }
        }
        return false;
    }
}
