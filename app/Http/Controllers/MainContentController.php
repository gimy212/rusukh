<?php

namespace App\Http\Controllers;

use App\Models\MainContent;
use App\Models\Content;
use App\Models\ContentAr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class MainContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $mainContent = DB::table('contents')->latest()->paginate();
        return view('cpanal.main-content.edit', compact('mainContent'));

    }

    public function show(Content $mainContent)
    {
       return view('cpanal.main-content.edit', compact('mainContent'));
    }

    public function edit(Content $mainContent)
    {
        $mainContent = DB::table('contents')->latest()->paginate();
        return view('cpanal/main-content/edit', compact('mainContent'));
    }

    public function editAr(ContentAr $mainContent)
    {
        $mainContent = DB::table('contents_ar')->latest()->paginate();
        return view('cpanal/main-content/edit-ar', compact('mainContent'));
    }

    public function update(Request $request, $id)
    {
        try {
            $mainContent= Content::findOrFail($id);

            //update in db
            $mainContent->update($request->all());
            return redirect()->back()->with(['Update' => 'Content Updated Successflly']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }


    public function updateAr(Request $request, ContentAr $mainContent)
    {

        $mainContent->update($request->all());
        return redirect()->back()->with('Update','Content Updated Successflly') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $mainContent)
    {
        //
    }
}
