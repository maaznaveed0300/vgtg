<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function expertise(){
        return view('admin.admindashboard');
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
