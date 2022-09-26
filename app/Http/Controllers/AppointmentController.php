<?php

namespace App\Http\Controllers;
use App\Models\Appoint;
use App\Mail\appointment;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentAr;
use Illuminate\Support\Facades\Mail;
use App\Models\Menu;
use App\Models\ChiledMenu;
use Illuminate\Support\Facades\App;
class AppointmentController extends Controller
{

    public function index(){

         if(App::getLocale() == 'en'){
        $allcontents = Content::all();
        }else{
        $allcontents = ContentAr::all();
        }

         $menus = Menu::all();
        return view('theme.appointment', compact('allcontents','menus'));
    }

   public function SendAppointment(Request $request){

        $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'date' => $request->date,
                    'time' => $request->time,
                    'service' => $request->service,
                    'type' => $request->type,
                 ];

      //Mail::to('outletahan@gmail.com')->send(new appointment($data));
      $appointment = appoint::create($data);
      return back()->with('Success', 'Your message has been sent successfully');
   }
}
