<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Content;
use App\Models\ContentAr;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\ChiledMenu;

class SinglePostController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')->latest()->paginate();
        $menus = Menu::all();
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        return view('theme.singlepost', compact('posts','allcontents','menus'));
    }

    public function show($slug) 
    {
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        $cat = Category::latest()->paginate(7);
        $posts = Post::where('slug', $slug)->FirstOrFail(); 
        $menus = Menu::all();
       return view('theme.singlepost', compact('allcontents','posts','cat','menus'));
    }
    
     public function showw() 
    {
        $posts = DB::table('posts')->latest()->paginate();
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        $cat = Category::latest()->paginate(7);
        $menus = Menu::all();
       return view('theme.blog', compact('allcontents','posts','cat','menus'));
    }

}
