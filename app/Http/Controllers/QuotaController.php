<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\RequestQuota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\quota;
class QuotaController extends Controller
{



   public function SendRequestQuota(Request $request){


            if($request->hasFile('file')){
                $file = $request->file('file');
                $filePath = $file->getClientOriginalName();
                $file->move('uploads/request-quota',$filePath);
            }

            if($request->hasFile('file')){

                $path_file = 'uploads/request-quota/'.$filePath;

            }else{

                $path_file = 'false';
            }


            if($request->hasFile('tax')){
                $tax = $request->file('tax');
                $taxPath = $tax->getClientOriginalName();
                $tax->move('uploads/request-quota',$taxPath);
            }

            if($request->hasFile('tax')){

                $path_tax = 'uploads/request-quota/'.$taxPath;

            }else{

                $path_tax = 'false';
            }

            if($request->hasFile('registration')){
                $registration = $request->file('registration');
                $regPath = $registration->getClientOriginalName();
                $registration->move('uploads/request-quota',$regPath);
            }

            if($request->hasFile('registration')){

                $path_reg = 'uploads/request-quota/'.$regPath;

            }else{

                $path_reg = 'false';
            }


        $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'city' => $request->city,
                    'type' => $request->type,
                    'file' => $path_file,
                    'state' => $request->state,
                    'company_name' => $request->company_name,
                    'consultant' => $request->consultant,
                    'project_name' => $request->project_name,
                    'tax' => $path_tax,
                    'registration' => $path_reg,
                 ];

      //Mail::to('outletahan@gmail.com')->send(new quota($data));
      $quota = RequestQuota::create($data);
      return back()->with('Success', 'Your message has been sent successfully');
   }

}

