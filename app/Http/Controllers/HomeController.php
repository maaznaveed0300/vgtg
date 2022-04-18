<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Expertise;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    // public function index()
    // {
    //     return view('dashboard');
    // }


    public function index()
    {
        $expertise = Expertise::all();

        return view('admin.createartist',['expertises'=>$expertise]);
    }
    public function adminHome()
    {
        $expertise = Expertise::all();
        return view('admin.admindashboard',['expertises'=>$expertise]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'expertise' => 'required',
        ]);
        $expertise = new Expertise();
        $expertise->expertise = $request->expertise;
        // dd($expertise);
        $expertise->save();

        return redirect('admin.admindashboard',['expertises'=>$expertise]);
    }
    public function singerModal($id){

        return Artist::find($id);
    }
}
