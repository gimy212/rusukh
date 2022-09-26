<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcontents = Content::latest()->paginate();
        $sliders = DB::table('slider')->latest()->paginate();
        $products =  DB::table('products')->latest()->paginate();
        $reviews =  DB::table('reviews')->latest()->paginate();
        $footer =  DB::table('footer')->get();

        return view('cpanal.dashboard', compact('allcontents','sliders','products','reviews','footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cpanal.create');
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
        return redirect()->route('cpanal.dashboard')->with('Success', 'Content Created Successfully');

    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
       return view('cpanal.dashboard', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {

        return view('cpanal.edit', compact('content'));
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



            $contents = DB::table('slider')->latest()->paginate();

            $content = Content::update($request->all());

            return redirect()->route('cpanal.edit',compact('contents'))->with('Success', 'Content Updated Successfully');

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
