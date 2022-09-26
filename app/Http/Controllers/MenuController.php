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
class MenuController extends Controller
{

    public function index()
    {
        $menus = Menu::all();
       return View('cpanal.menu.index')->with('menus',$menus);
    }
    
        public function chiledIndex()
    {
        $chileds = ChiledMenu::all();
       return View('cpanal.menu.chiled-index')->with('chileds',$chileds);
    }


    // public function show($id)
    // {
    //     $allcontents = Content::latest()->paginate();
    //     $cat = Category::latest()->paginate(7);
    //     $posts = Post::latest()->paginate();
    //     $tags = Tag::where('id', $id)->FirstOrFail();
    //    return view('theme.blog-tags', compact('allcontents','posts','cat','tags'));
    // }



    public function create()
    {
        return View('cpanal.menu.create');
    }
    
      public function chiledCreate()
    {
         $menus = Menu::all();
        return View('cpanal.menu.chiled-create', compact('menus'));
    }


    public function store(Request $request)
    {
        $menu = Menu::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar
        ]);
      return redirect()->route('menu.index')->with('Success', 'Chiled Added Successfully');
    }
       
        public function chiledStore(Request $request)
    {
        $chiled = ChiledMenu::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'link' => $request->link
        ]);
      return redirect()->route('chiled.index')->with('Success', 'Chiled Added Successfully');
    }



    public function edit($id)
    {
        $menu = Menu::find($id) ;
        return view('cpanal.menu.edit')->with('menu', $menu);
    }
 public function chieldedit($id)
    {
        $menus = Menu::all();
        $chiled = ChiledMenu::find($id);
        return View('cpanal.menu.chiled-edit', compact('chiled','menus')); 
    }
    public function update(Request $request,$id)
    {
        $menu = Menu::find( $id ) ;
        $this->validate($request,[
            'name' =>  'required',
            'name_ar' =>  'required',
        ]);
        $menu->name = $request->name;
        $menu->name_ar = $request->name_ar;
        $menu->save();
      return redirect()->route('menu.index')->with('Success', 'Menu Added Successfully');
    }
 public function chieldupdate(Request $request,$id)
    {
        $chiled = ChiledMenu::find( $id ) ;
        $this->validate($request,[
            'name' =>  'required',
            
        ]);
        $chiled->name = $request->parent_id;
        $chiled->name_ar = $request->name;
        $chiled->link = $request->link;
        $chiled->name_ar = $request->name_ar;
        $chiled->save();
      return redirect()->back()->with('Success', 'chieldMenu Added Successfully');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('Delete','Menu Deleted Successflly') ;
    }
    
         public function chiledDestroy($id)
     {
         $chiled = ChiledMenu::find($id);
         $chiled->delete();
         return redirect()->back()
         ->with('Delete','Chiled Deleted Successflly') ;
     }

}
