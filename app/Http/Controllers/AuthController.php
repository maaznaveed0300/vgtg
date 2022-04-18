<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Expertise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function expertise(){
        return view('admin.admindashboard');
    }

    public function register(Request $req){
        $user = new User();
        $user->name=$req->name;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->password=Hash::make($req->password) ;
        $user->save();

        $artist = new Artist();
        $artist->name = $req->name;
        $artist->phone=$req->phone;
        $artist->email=$req->email;
        $artist->user_id = $user->id;
        $artist->save();

        return redirect('/login');
        // 'name' = $req->name,

    }

    public function store(Request $request)
    {
        $request->validate([
            'expertise' => 'required',
        ]);

        $expertise = new Expertise();
        $expertise->expertise = $request->expertise;
        $expertise->save();

        return redirect('admin.admindashboard',['expertises'=>$expertise]);
    }
}
