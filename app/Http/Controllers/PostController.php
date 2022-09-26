<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Menu;
use App\Models\ChiledMenu;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $post = DB::table('posts')->latest()->paginate();
        return view('cpanal.posts.index', compact('post'));
    }

    public function create()
    {
        $tags = Tag::all();

        if($tags->count() == 0 ){
            return redirect()->route('tags.create');
        }

        $cat = Category::all();

        if($cat->count() == 0 ){
            return redirect()->route('cat.create');
        }


       return view('cpanal.posts.create', compact('tags','cat'));
    }

    public function store(Request $request)
    {

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photoPath = $photo->getClientOriginalName();
            $photo->move('uploads/posts',$photoPath);
        }

        if($request->hasFile('quota')){


            $quota = $request->file('quota');
            $quotaPath = time().$quota->getClientOriginalName();
            $quota->move('uploads/quota',$quotaPath);
        }

        if($request->hasFile('quota')){

            $path = 'uploads/quota/'.$quotaPath;

        }else{

            $path = 'false';
        }


        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'title_ar' => $request->title_ar,
            'content_ar' => $request->content_ar,
            'photo' => 'uploads/posts/'.$photoPath,
            'quota' => $path,
            'slug' => $request->slug,
            'slug' => Str::slug($request->title),
            'slug_ar' => $request->slug_ar,
            'slug_ar' => Str::slug($request->title),
            'quota_btn' => $request->quota_btn,
            'desc' => $request->desc,
            'seo_title' => $request->seo_title,
            'seo_title_ar' => $request->seo_title_ar,
            'seo_description' => $request->seo_description,
            'seo_description_ar' => $request->seo_description_ar,
            'keywords' => $request->keywords,
            'keywords_ar' => $request->keywords_ar,
        ]);
        $post->cat()->attach($request->cat);
        $post->tag()->attach($request->tags);


        return redirect()->back()->with('Success','Post Created Successflly') ;
    }



    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $menus = Menu::all();
       return view('theme.singlepost',compact('post','menus'));
    }




    public function edit($id)
    {
        $cat = Category::all();
        $post = Post::find( $id ) ;
        $tags = Tag::all();
        $post = Post::where('id' , $id )->where('user_id', Auth::id())->first();
         if ($post === null) {
            return redirect()->back() ;
        }
        return view('cpanal.posts.edit', compact('post','tags','cat'));


    }


     public function update(Request $request, $id)
     {


            $post = Post::find( $id );
            // $this->validate($request,[
            //     'title' =>  'required',
            //     'content' =>  'required',
            //     'cat' =>  'required',
            //     'desc' =>  'required',
            //     'title_ar' =>  'required',
            //     'content_ar' => 'required'
            // ]);

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/posts',$newPhoto);
            $post->photo ='uploads/posts/'.$newPhoto;
        }

        if ($request->has('quota')) {
            $quota = $request->quota;
            $newQuota = time().$quota->getClientOriginalName();
            $quota->move('uploads/quota',$newQuota);
            $post->quota ='uploads/quota/'.$newQuota;
        }

            $post->title = $request->title;
            $post->content = $request->content;
            $post->title_ar = $request->title_ar;
            $post->content_ar = $request->content_ar;
            $post->desc = $request->desc;
            $post->slug = $request->slug;
            $post->slug_ar = $request->slug_ar;
            $post->quota_btn = $request->quota_btn;
            $post->seo_title = $request->seo_title;
            $post->seo_title_ar = $request->seo_title_ar;
            $post->seo_description = $request->seo_description;
            $post->seo_description_ar = $request->seo_description_ar;
            $post->keywords = $request->keywords;
            $post->keywords_ar = $request->keywords_ar;
            $post->save();
            $post->tag()->sync($request->tags);
            $post->cat()->sync($request->cat);

            return redirect()->back()->with('Success','Post Updated Successflly');
     }

     public function destroy($id)
     {
         $Post = Post::find($id);
         $Post->delete();
         return redirect()->back()
         ->with('Delete','Post Deleted Successflly') ;
     }

}
