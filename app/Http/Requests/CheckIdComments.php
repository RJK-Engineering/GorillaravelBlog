<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;

class CheckIdComments extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $post_id = Comment::find($this->route('comment'))[0]->post_id;
        //SELECT user_id FROM blogs INNER JOIN posts ON blogs.id = posts.blog_id WHERE posts.id = 23
        $user_id = DB::table('blogs')
                    ->join('posts', 'blogs.id', '=', 'posts.blog_id')
                    ->where('posts.id', '=', $post_id)
                    ->select('user_id')
                    ->first()->user_id;
                    
        return $user_id == Auth::id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
