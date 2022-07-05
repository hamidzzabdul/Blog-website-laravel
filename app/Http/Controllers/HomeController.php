<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //

    public function home()
    {

        //we can read comments count   
        return view('home.homepage', [
            'posts' => BlogPost::latest()
                ->withCount('comments')
                ->paginate(5),
            'mostCommented' => BlogPost::mostCommented()->take(1)
                ->get(),
            'topPicks' => Category::all()->take(4),
            'mostPopular' => BlogPost::mostPopular()->take(3)->get()
        ]);
    }
}
