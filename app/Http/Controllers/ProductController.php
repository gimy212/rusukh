<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $product = DB::table('products')->latest()->paginate();
        return view('cpanal.products.index', compact('product'));
    }


    public function create()
    {
        return view('cpanal.products.create');
    }

    public function store(Request $request)
    {

                $prod_photo = $request->prod_photo;
                $newPhoto = time().$prod_photo->getClientOriginalName();
                $prod_photo->move('uploads/products',$newPhoto);

                $post = Product::create([
                    'user_id' => Auth::id(),
                    'prod_title' => $request->prod_title,
                    'prod_bio' => $request->prod_bio,
                    'prod_photo' => 'uploads/products/'.$newPhoto,
                    'prod_desc' => $request->prod_desc,
                     'title_ar' => $request->title_ar,
                    'bio_ar' => $request->bio_ar,
                    'desc_ar' => $request->desc_ar,
                    'link' => $request->link,
                    'link_ar' => $request->link_ar,
                    
                ]);
                return redirect()->route('products.index')->with('Success', 'Product Created Successfully');
    }


    public function show(Product $product)
    {
        return view('cpanal.products.index', compact('product'));
    }



    public function edit($id)
    {
        // $product = Product::find( $id ) ;
        $product = Product::where('id' , $id )->where('user_id', Auth::id())->first();

        //  if ($product === null)
        // {
        //    return redirect()->back();
        // }
        return view('cpanal.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {



        $product = Product::find( $id ) ;
        $this->validate($request,[
            'prod_title' =>  'required',
            'prod_desc' =>  'required',
        ]);
     //   dd($request->all());

    if ($request->has('prod_photo')) {
        $prod_photo = $request->prod_photo;
        $newPhoto = time().$prod_photo->getClientOriginalName();
        $prod_photo->move('uploads/products',$newPhoto);
        $product->prod_photo ='uploads/products/'.$newPhoto ;
    }
        $product->prod_title = $request->prod_title;
        $product->prod_bio = $request->prod_bio;
        $product->prod_desc = $request->prod_desc;
         $product->title_ar = $request->title_ar;
        $product->bio_ar = $request->bio_ar;
        $product->desc_ar = $request->desc_ar;
        $product->link = $request->link;
        $product->link_ar = $request->link_ar;
        $product->save();

        return redirect()->back()->with('Success','Product Updated Successflly') ;

    }
        public function destroy($id)
        {
            $Product = Product::find($id);
            $Product->delete();
            return redirect()->back()
            ->with('Delete','Product Deleted Successflly') ;
        }

}


