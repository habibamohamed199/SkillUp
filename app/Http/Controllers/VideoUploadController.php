<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VideoUploadController extends Controller
{
    public function index()
    {
        $cats= ['edu','test','blah blah'];
        return view('video_upload',['categories'=>$cats]);
    }

    public function upload()
    {
        $request = request();
        $request->validate([
            'videos' => 'required|array',
            'videos.*' => 'file|mimes:mp4,mkv,avi|max:2048000',
        ]);

        $uploadedFiles = [];

        try {
            $num = 1;
            $course = new Course;
            $course->title = "Test Course";
            $course->category = "Test Category";
            $author = User::where('email', request('author'))->first();
            $course->author_id = $author->id;
            $course->thumbnail = "Test Thumbnail";
            $course->description = $request->description;
            $course->brief = $request->description;
            $course->price = 100;
            $course->save();
            foreach ($request->file('videos') as $video) {
                $extension = $video->getClientOriginalExtension();
                $customFilename = $author->name . "-" . $course->title . $num . "." . $extension;
                $path = $video->storeAs('videos', $customFilename, 'public');
                $url = Storage::url($path);
                $newVideo = new video;
                $newVideo->title = $customFilename;
                $newVideo->path = $url;
                $newVideo->course_id = $course->id;
                $newVideo->save();


                $uploadedFiles[] = [
                    'file_name' => $customFilename,
                    'file_path' => $path,
                    'file_url' => $url,
                ];
                $num++;
            }

            return response()->json([
                'message' => 'Videos uploaded successfully!',
                'uploaded_files' => $uploadedFiles,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Video upload failed!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
