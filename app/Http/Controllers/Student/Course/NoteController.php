<?php

namespace App\Http\Controllers\Student\Course;

use App\Models\CourseNote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Student\CourseNoteResource;

class NoteController extends Controller
{
    public function getAllNotes($user_id, $course_id)
    {
        $notes = CourseNote::where('user_id', $user_id)->where('course_id', $course_id)->get();
        $notes = CourseNoteResource::collection($notes);
        return response()->json(['messages' => 'All notes retrieved successfully', 'notes' => $notes, 'status' => 'success']);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'user_id' => 'required',
                'course_id' => 'required',
                'note' => 'required',
                'title' => 'required',
            ],
            [
                'user_id.required' => 'Student ID is required',
                'course_id.required' => 'Course ID is required',
                'note.required' => 'Note should not blank',
                'title.required' => 'Note name should not blank',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['messages' => $validator->messages(), 'status' => 422]);
        } else {
            $note = CourseNote::create([
                'user_id' => $request->user_id,
                'course_id' => $request->course_id,
                'note' => $request->note,
                'title' => $request->title,
            ]);

            if ($note) {
                $note = new CourseNoteResource($note);
                return response()->json(['messages' => 'Note saved successfully', 'note' => $note, 'status' => 'success']);
            }
        }
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($note_id)
    {
        $validator = Validator::make(
            ['note_id' => $note_id],
            ['note_id' => 'required'],
            ['note_id.required' => 'Note ID is required']
        );

        if ($validator->fails()) {
            return response()->json(['messages' => $validator->messages(), 'status' => 422]);
        }

        $note = CourseNote::find($note_id);

        if ($note) {
            $note->delete();

            return response()->json(['messages' => 'Note Deleted successfully', 'status' => 200]);
        } else {
            return response()->json(['messages' => 'Note Not Found', 'status' => 400]);
        }
    }
}
