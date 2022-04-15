<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Expertise;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
    public function index(){
        $artist=Artist::where('status',1)->get();
        // $artist=Artist::all();
        return View('admin.artistdashboard',['artists'=>$artist]);
    }

    public function create(){
        // $expertise=Expertise::where('status',1)->get();
        $expertise=Expertise::all();
        return view('admin.createartist',['expertises'=>$expertise]);
    }

    public function store(Request $req){
        $artist = new Artist();
        $artist->name=$req->name;
        $artist->expertise=$req->expertise;
        $artist->introduction=$req->introduction;
        $artist->referred_by=$req->refferedby;

        if($req->hasFile('image')){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('saved_images',$filename);
            $artist->profile_picture = $filename;
        }
        if($req->hasFile('video')){
            $file = $req->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('saved_videos',$filename);
            $artist->promo_video = $filename;
        }
        $artist->gender=$req->gender;
        $artist->email=$req->email;
        $artist->phone=$req->phone;
        // dd($req->all());
        $artist->save();

        $artist=Artist::get()->all();
        return redirect('/dashboard');
    }

    public function update($id)
    {
        $artist=Artist::find($id);
        return view('admin.updateartist',["artists"=>$artist] );
    }

    public function update_artist(Request $req)
    {
        $artist=Artist::find($req->id);
        $artist->name=$req->name;
        $artist->expertise="singer";
        $artist->introduction=$req->introduction;
        if($req->hasFile('image')){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('saved_images',$filename);
            $artist->profile_picture = $filename;
        }
        if($req->hasFile('video')){
            $file = $req->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('saved_videos',$filename);
            $artist->promo_video = $filename;
        }
        $artist->email=$req->email;
        $artist->phone=$req->phone;
        // dd($req->all());
        $artist->save();

        // $services=Artist::where('status',1)->get();
        return View('admin.updateartist',['artists'=>$artist]);
    }

    public function approve($id)
    {

        $artist=Artist::find($id);
        if($artist->status == 1) {
            $artist->status = 0;
            $artist->save();
        }
        else {
            $artist->status = 1;
            $artist->save();
        }

        return redirect("artist/dashboard");

    }
    public function pending()
    {

        $artist=Artist::where('status',0)->get();
        return View('admin.pendingartist',['artists'=>$artist]);

    }
    public function reject($id)
    {

        $artist=Artist::find($id);
        if($artist->status == 0) {
            $artist->status = 2;
            $artist->save();
        }
        else {
            $artist->status = 0;
            $artist->save();
        }

        return redirect("artist/dashboard");
    }
    public function rejectedartist(){
        $artist=Artist::where('status',2)->get();
        return View('admin.rejectedartist',['artists'=>$artist]);
    }
    public function changeStatus(Request $request)
    {
        $user = Artist::find($request->id)->update(['status' => $request->status]);

        return response()->json(['success'=>'Status changed successfully.']);
    }


}
