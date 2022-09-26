<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use App\Models\Message;
use App\Models\Appoint;
use App\Models\Clintip;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index(Request $request)
    {

        $posts = DB::table('posts')->count();
        $products = DB::table('products')->count();
        $reviews = DB::table('reviews')->count();
        $messages = DB::table('messages')->count();
        $appointments = DB::table('appoints')->count();
        $clintip = Clintip::create([
            $clinti=request()->ip($_SERVER['REMOTE_ADDR']),
            'ip' => $request->clinti,
        ]);
        $category= DB::table('categories')->count();
        $quota= DB::table('request_quota')->count();
        $reviews= DB::table('reviews')->count();
        $tag= DB::table('tags')->count();
        $question= DB::table('question')->count();
        $Cars= DB::table('cars')->count();
        $sizings= DB::table('sizings')->count();
        $getMessage = Message::latest()->paginate(7);

        $getAppointment = Appoint::latest()->paginate(4);


       


        return view('cpanal.chart', compact('question','Cars','sizings','tag','reviews','quota','category','clintip','posts','products','reviews','messages','appointments','getMessage','getAppointment'));
    }
    public function store()
    {
        return view('auth.login');
    }
}
