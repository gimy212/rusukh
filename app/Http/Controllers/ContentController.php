<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentAr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\ChiledMenu;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = DB::table('sliders')->latest()->paginate();
        $products = DB::table('products')->latest()->paginate();
        $reviews = DB::table('reviews')->latest()->paginate();
        $contents = DB::table('contents')->latest()->paginate();
        $contents_ar = DB::table('contents_ar')->latest()->paginate();
        $menus = Menu::all();

        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        return view('theme.index', compact('contents_ar','contents','allcontents','sliders','products','reviews','menus'));
    }

    public function create()
    {
       return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $content = Content::create($request->all());
       return redirect()->route('admin.create')->with('Success', 'Content Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
       return view('admin.dashboard', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
       return view('admin.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {

            $content->update($request->all());
            return redirect()->route('admin.create')->with('Success', 'Content Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
    }
}
