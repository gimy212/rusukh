<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Appoint;
use App\Models\RequestQuota;
use Illuminate\Http\Request;

class MessageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $messages = Message::where('id', $id)->first();
        return view('cpanal.messages.single-message', compact('messages'));
    }

    public function GetMesaage(){


            $messages = Message::latest()->paginate(20);

            return view('cpanal.messages.getmessage', compact('messages'));
}

public function GetAppointment(){

        $appointment = Appoint::latest()->paginate(20);
        return view('cpanal.messages.getappointment', compact('appointment'));
}

public function showAppointment($id)
{
    $appointment = Appoint::where('id', $id)->first();
    return view('cpanal.messages.single-appointment', compact('appointment'));
}


public function GetRequestQuota(){

    $requestquota = RequestQuota::latest()->paginate(20);
    return view('cpanal.messages.getquota', compact('requestquota'));
}

public function ShowRequestQuota($id)
{
$requestquota = RequestQuota::where('id', $id)->first();
return view('cpanal.messages.single-quota', compact('requestquota'));
}

public function message_delete($id)
{
$messages = Message::find($id);
$messages->delete();
return redirect()->back()
->with('Delete','message Deleted Successflly') ;

}
public function appoint_delete($id)
{
$appointment = Appoint::find($id);
$appointment->delete();
return redirect()->back()
->with('Delete','appoint Deleted Successflly') ;

}
public function requst_delete($id)
{
$requestquota = RequestQuota::find($id);
$requestquota->delete();
return redirect()->back()
->with('Delete','request Deleted Successflly') ;

}

}
