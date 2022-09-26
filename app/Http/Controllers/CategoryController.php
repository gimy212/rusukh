<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\ContentAr;
use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\ChiledMenu;

class CategoryController extends Controller
{
    public function index()
    {

        $cat = Category::all();
       return View('cpanal.category.index')->with('cat',$cat);
    }


    public function create()
    {
        return View('cpanal.category.create');
    }
   public function show($id)
    {
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
            }else{ 
            $allcontents = ContentAr::get();
            }
        $posts = Post::latest()->paginate();
        $cat = Category::where('id', $id)->FirstOrFail();
        $menus = Menu::all();
        $blogPosts = $cat->Post()->paginate(9);
       
       return view('theme.blog-cat', compact('allcontents','posts','cat','menus','blogPosts'));
    } 

    public function store(Request $request)
    {
        $cat = $request->cat;
        $cat = Category::create([
            'cat' => $request->cat,
            'cat_ar' => $request->cat_ar
        ]);
        return redirect()->back()->with('Success', 'Category Added Successfully');

    }


    public function edit($id)
    {
        $cat = Category::find($id) ;

        return view('cpanal.category.edit')->with('cat', $cat);
    }

    public function update(Request $request,$id)
    {

        $cat = Category::find( $id ) ;
        $this->validate($request,[
            'cat' =>  'required',
            'cat_ar' =>  'required',
        ]);
        $cat->cat = $request->cat;
        $cat->cat_ar = $request->cat_ar;
        $cat->save();
      return redirect()->route('cat.index')->with('Success', 'Category Added Successfully');

    }


    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->back()->with('Delete','Category Deleted Successflly') ;
    }

}
