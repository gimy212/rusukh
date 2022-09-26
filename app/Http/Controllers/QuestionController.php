<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Content;
use App\Models\ContentAr;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Question;
use App\Models\Cars;
use App\Models\Sizings;

class QuestionController extends Controller
{

    public function index(){

        $menus = Menu::all();
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        return view('theme.question', compact('menus','allcontents'));
    }


    public function store(Request $request){
        // Create Questions
        $question = Question::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'name_company' => $request->name_company,
            'location'     => $request->location,
            'abrief'       => $request->abrief,
            'food'         => $request->food,
            'meals'        => $request->meals,
            'wash'         => $request->wash,
            'dishwasher'   => $request->dishwasher,
            'dedicated'    => $request->dedicated,
            'vegetable'    => $request->vegetable,
            'sinks'        => $request->sinks,
            'cooking'      => $request->cooking,
            'underground'      => $request->underground,
        ]);
        return redirect()->back()->with('Success','Added Successfully');
    }
    public function question_index(){

        $data = Question::all();
       
        return view('cpanal.question.index', compact('data'));
    }
    public function question_show($id){
        $question = Question::find( $id );
        $data = Question::all();
       
        return view('cpanal.question.show', compact('data'));
    }
    public function question_delete($id){
        $question = Question::find( $id );
        $question->delete();
        return redirect()->back()
        ->with('Delete',' Deleted Successflly') ;
    }
    public function cars(){
        $menus = Menu::all();
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        return view('theme.question_cars', compact('menus','allcontents'));
    }
    public function cars_create(Request $request){
        // Create Questions
        $cars = Cars::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'facility_name' => $request->facility_name,
            'location'     => $request->location,
            'overview'       => $request->overview,
            'Small_cars'         => $request->Small_cars,
            'Medium_cars'        => $request->Medium_cars,
            'Trucks'         => $request->Trucks,
            'Buses'   => $request->Buses,
            'Heavy_machinery'    => $request->Heavy_machinery,
            'Other_machinery'    => $request->Other_machinery,
            'engines'        => $request->engines,
            'engines_oil'      => $request->engines_oil,
            'veicles_washed'      => $request->veicles_washed,
            'oil_collected'      => $request->oil_collected,
            'number_vehicles'      => $request->number_vehicles,
           
        ]);
        return redirect()->back()->with('Success','Added Successfully');
    }
    public function reviews_car(){
        $data = Cars::all();
       
        return view('cpanal.question_car.index', compact('data'));
    }
    public function cars_show($id){
        $cars = Cars::find( $id );
        $data = Cars::all();
       
        return view('cpanal.question_car.show', compact('data'));
    }
    public function questioncar_delete($id){
        $cars = Cars::find( $id );
        $cars->delete();
        return redirect()->back()
        ->with('Delete',' Deleted Successflly') ;
    }
    public function sizing(){
        $menus = Menu::all();
        if(App::getLocale() == 'en'){
            $allcontents = Content::get();
        }else{
            $allcontents = ContentAr::get();
        }
        return view('theme.sizing_grease', compact('menus','allcontents'));
    }

    public function sizing_create(Request $request){
        // Create Questions
        $sizings = Sizings::create([
            'name'         => $request->name,
            'dimensions'        => $request->dimensions,
            'Drains_number'        => $request->Drains_number,
            'Drains_dimensions' => $request->Drains_dimensions,
            'Sewers_number'     => $request->Sewers_number,
            'Sewer_dimensions'       => $request->Sewer_dimensions,
            'number_washing'         => $request->number_washing,
            'machine_volume'        => $request->machine_volume,
           
        ]);
        return redirect()->back()->with('Success','Added Successfully');
    }
    public function sizing_index(){
        $data = Sizings::all();
       
        return view('cpanal.sizing.index', compact('data'));
    }
    public function sizing_delete($id){
        $sizing = Sizings::find( $id );
        $sizing->delete();
        return redirect()->back()
        ->with('Delete',' Deleted Successflly') ;
    }
}
