<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentAr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\ChiledMenu;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization as LaravelLocalization;
class ContactController extends Controller
{



    public function index(){

        if(App::getLocale() == 'en'){
        $allcontents = Content::all();
        }else{
        $allcontents = ContentAr::all();
        }
         $menus = Menu::all();
        return view('theme.contact', compact('allcontents','menus'));
    }

   public function SendEmail(Request $request){

        $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'phone' => $request->phone,
                    'message' => $request->message,
                 ];

     // Mail::to('outletahan@gmail.com')->send(new ContactUs($data));
      $message = Message::create($data);
      return back()->with('Success', 'Your message has been sent successfully');
   }
}
