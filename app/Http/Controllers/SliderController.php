<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;


class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $sliders = DB::table('sliders')->latest()->paginate();
        return view('cpanal.dashboard', compact('sliders'));


    }


    public function create()
    {
       return view('cpanal.create');
    }


    public function store(Request $request)
    {



        $slider_photo = $request->slider_photo;
        $newPhoto = time().$slider_photo->getClientOriginalName();
        $slider_photo->move('uploads/sliders',$newPhoto);

        $sliders = Slider::create([

            'user_id' => Auth::id(),
            'mini_title' => $request->mini_title,
            'slider_title' => $request->slider_title,
            'slider_content' => $request->slider_content,
            'slider_photo' => 'uploads/sliders/'.$newPhoto,
              'mini_title_ar' => $request->mini_title_ar,
            'title_ar' => $request->title_ar,
            'content_ar' => $request->content_ar,
            'link' => $request->link,
            'link_ar' => $request->link_ar,
        ]);

        return redirect()->route('slider.index')->with('Success', 'Slider Created Successfully');


    }



    public function show(Slider $sliders)
    {
       return view('cpanal.dashboard', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sliders = Slider::find( $id ) ;
        $sliders = Slider::where('id' , $id )->where('user_id', Auth::id())->first();

         if ($sliders === null)
        {
           return redirect()->back() ;
        }

        return view('cpanal.edit', compact('sliders'));
     }



    public function update(Request $request, $id)
    {

        $sliders = Slider::find( $id ) ;
        $this->validate($request,[
            'slider_title' =>  'required',
            'slider_content' =>  'required',
        ]);
     //   dd($request->all());

                if ($request->has('slider_photo')) {
                    $slider_photo = $request->slider_photo;
                    $newPhoto = time().$slider_photo->getClientOriginalName();
                    $slider_photo->move('uploads/sliders',$newPhoto);
                    $sliders->slider_photo ='uploads/sliders/'.$newPhoto ;
                     }

                    $sliders->mini_title = $request->mini_title;
                    $sliders->slider_title = $request->slider_title;
                    $sliders->slider_content = $request->slider_content;
                     $sliders->mini_title_ar = $request->mini_title_ar;
                    $sliders->title_ar = $request->title_ar;
                    $sliders->content_ar = $request->content_ar;
                    $sliders->link = $request->link;
                    $sliders->link_ar = $request->link_ar;
                    $sliders->save();

                    return redirect()->back()->with('Update', 'Slider Updated Successfully');


     }


     public function destroy($id)
     {
         $slider = Slider::find($id);
         $slider->delete();
         return redirect()->back()
         ->with('Delete','Slider Deleted Successflly') ;
     }
}
