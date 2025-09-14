<?php

namespace Database\Seeders;

use App\Models\ForumPost;
use App\Models\ForumPostComment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ForumPostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'teacher@app.com')->first();
        $post = ForumPost::first();

        $data = [
            'user_id'           => $user->id,
            'forum_post_id'     => $post->id,
            'comment'       =>
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries",

        ];

        ForumPostComment::create($data);
    }
}
