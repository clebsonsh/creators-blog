<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * Load home with all post paginated
     *
     */

    public function __invoke()
    {
        $posts = Post::paginate();

        return view('home.index', compact('posts'));
    }
}
