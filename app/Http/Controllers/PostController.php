<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
public function show($slug)
{

    $post = \DB::table('posts')->where('slug', $slug)->first();

dd($post);

    if(! $post){
        abort(404);
    }

    return view('post', [
        'post' => $post
    ]);
}
}
