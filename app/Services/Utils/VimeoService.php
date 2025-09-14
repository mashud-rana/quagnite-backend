<?php

namespace App\Services\Utils;

use Vimeo\Laravel\VimeoManager;
use Illuminate\Support\Facades\Http;

class VimeoService
{
    private $vimeo;
    private $authorization;

    public function __construct(VimeoManager $vimeo)
    {
        $this->vimeo = $vimeo;
        $this->authorization = config('settings.vimeo_access');
    }

    public function GetAllVimeoVideos()
    {
        $videos = $this->vimeo->request('/me/videos');
        return $videos;
    }
    public function GetVimeoVideo($video_id)
    {
        $video = $this->vimeo->request('/me/' . $video_id);
        return $video;
    }
    public function UploadToVimeo($file)
    {
        try {
            $file_name = $file->getClientOriginalName();
            $uri = $this->vimeo->upload($file, [
                "name" => $file_name,
            ]);

            return str_replace('/videos/', '', $uri);
        } catch (\Exception $e) {
            return "Vimeo error occurred: " . $e->getMessage();
        }
    }

    function vimeoVideoDuration($video_id)
    {

        $response = Http::withHeaders([
            "authorization" => "Bearer {$this->authorization}",
            "cache-control" => "no-cache",
        ])->get("https://api.vimeo.com/videos/{$video_id}");

        if ($response->successful()) {
            $info = $response->json();
            if (isset($info['duration'])) {
                return (int)$info['duration'];
            }
        }

        return false;
    }

    public function deleteVideo($videoId)
    {
        try {
            // Send a DELETE request to the Vimeo API to delete the video with the given video ID
            $response = $this->vimeo->request('/videos/' . $videoId, [], 'DELETE');

            // Check if the video was deleted successfully
            if ($response['status'] == 204) {
                return "Video with ID $videoId has been deleted.";
            } else {
                return "Video deletion failed.";
            }
        } catch (\Exception $e) {
            return "Vimeo error occurred: " . $e->getMessage();
        }
    }

    public function CheckVideoUploadStatus($videoId)
    {
        try {
            $video_data = $this->vimeo->request('/videos/' . $videoId, [], 'GET');

            $status = $video_data['body']['transcode']['status'];

            if ($status == 'complete') {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return false; // Assume video is not available if there's an error
        }
    }
}
