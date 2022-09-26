<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $reviews = DB::table('reviews')->latest()->paginate();
        return view('cpanal.reviews.index', compact('reviews'));
    }


    public function create()
    {
        return view('cpanal.reviews.create');
    }


    public function store(Request $request)
    {


        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/reviews',$newPhoto);


        $post = Review::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'comment' => $request->comment,
            'photo' => 'uploads/reviews/'.$newPhoto,

        ]);

      return redirect()->route('reviews.index')->with('Success', 'Review Added Successfully');

    }


    public function show($reviews)
    {
        return view('cpanal.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $reviews = Review::find( $id ) ;
        $reviews = Review::where('id' , $id )->where('user_id', Auth::id())->first();
         if ($reviews === null) {
            return redirect()->back() ;
        }
        return view('cpanal.reviews.edit', compact('reviews'));
    }


    public function update(Request $request, $id)
    {



        $reviews = Review::find( $id ) ;
        $this->validate($request,[
            'name' =>  'required',
            'comment' =>  'required',
        ]);
     //   dd($request->all());

    if ($request->has('photo')) {
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/reviews',$newPhoto);
        $reviews->photo ='uploads/reviews/'.$newPhoto ;
    }

        $reviews->name = $request->name;
        $reviews->comment = $request->comment;
        $reviews->save();




      return redirect()->route('reviews.index')->with('Success', 'review Added Successfully');

    }


    public function destroy($id)
    {

        $review = Review::find($id);
        $review->delete();
        return redirect()->back()->with('Delete','Post Deleted Successflly') ;
    }
}
