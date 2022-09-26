<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\Content;
use App\Models\Menu;
use App\Models\ChiledMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TagController extends Controller
{

    public function index()
    {

        $tags = Tag::all();
       return View('cpanal.tags.index')->with('tags',$tags);
    }


    public function show($id)
    {
        $allcontents = Content::latest()->paginate();
        $cat = Category::latest()->paginate(7);
        $posts = Post::latest()->paginate();
        $tags = Tag::where('id', $id)->FirstOrFail();
        $menus = Menu::all();
        
       $tagPosts = $tags->Post()->paginate(9);
         
       return view('theme.blog-tags', compact('allcontents','posts','cat','tags','menus','tagPosts'));
    }



    public function create()
    {
        return View('cpanal.tags.create');
    }


    public function store(Request $request)
    {

        $tags = $request->tag;



        $tags = Tag::create([
            'tag' => $request->tag,
            'tag_ar' => $request->tag_ar
        ]);

      return redirect()->route('tags.index')->with('Success', 'Tag Added Successfully');

    }


    public function edit($id)
    {
        $tags = Tag::find($id) ;

        return view('cpanal.tags.edit')->with('tags', $tags);
    }

    public function update(Request $request,$id)
    {

        $tags = Tag::find( $id ) ;
        $this->validate($request,[
            'tag' =>  'required',
            'tag_ar' =>  'required',
        ]);

        $tags->tag = $request->tag;
        $tags->tag_ar = $request->tag_ar;
        $tags->save();




      return redirect()->route('tags.index')->with('Success', 'Tag Added Successfully');

    }


    public function destroy($id)
    {
        $tags = Tag::find($id);
        $tags->delete();
        return redirect()->back()->with('Delete','Tag Deleted Successflly') ;
    }

}
