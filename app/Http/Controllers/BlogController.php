<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Content;
use App\Models\ContentAr;
use App\Models\Tag;
use App\Models\Category;
use \Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\ChiledMenu;

class BlogController extends Controller
{

    public function index()
    {
        $Post = DB::table('posts')->latest()->paginate(9);
         $menus = Menu::all();
        if(App::getLocale() == 'en'){
        $allcontents = Content::latest()->paginate();
        }else{
        $allcontents = ContentAr::latest()->paginate();
        }
        return view('theme.blog', compact('Post','allcontents','menus'));
    }


    public function category($id)
    {

        $cat = Category::where($id ) ;
        $posts = Post::latest()->paginate();
        $menus = Menu::all();
        return view('theme.cat', compact('posts','cat','menus'));
    }


}
