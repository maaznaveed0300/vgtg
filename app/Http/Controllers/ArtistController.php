<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Artist_Expertise;
use App\Models\Expertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // $expertise = Expertise::find($user_id)->expertise;
        $expertise=Expertise::all();
        $artist_expertise=Artist_Expertise::where('user_id',Auth::user()->id)->first();
        $artist = Artist::where('user_id',Auth::user()->id)->first();
        $experties_list = DB::select('SELECT ae.id,e.expertise,u.name,u.email FROM `artist_expertise` ae JOIN expertises e ON ae.expertise_id=e.id JOIN users u ON ae.user_id=u.id where ae.user_id='.$artist->user_id, []);
        // dd($experties_list);
        return view('admin.createartist',['expertises'=>$expertise,'artist'=>$artist,'artist_expertise'=>$artist_expertise,'experties_list'=>$experties_list]);

    }

    public function destroy($id){
        $expertise= Artist_Expertise::find($id);
        $expertise->delete();
        return redirect('createartist');

    }

    public function store(Request $req){

        $artist =new Artist();
        $artist->name=$req->name;
        $artist->expertise=implode(',', $req->expertise);
        $artist->introduction=$req->introduction;
        $artist->referred_by=$req->refferedby;

        foreach($req->expertise as $exp) {
            $artist_expertise = new Artist_Expertise();
            $artist_expertise->expertise_id = $exp;
            $artist_expertise->user_id = Auth::user()->id;
            $artist_expertise->save();
        }

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
        // dd($artist);
        $artist->name=$req->name;
        $artist->expertise=implode(',', $req->expertise);
        $artist->introduction=$req->introduction;

        $deleteexpertise = Artist::where('user_id',$req->id)->delete();

        foreach($req->expertise as $exp) {
            $artist_expertise = new Artist_Expertise();
            $artist_expertise->expertise_id = $exp;
            $artist_expertise->user_id = Auth::user()->id;
            $artist_expertise->save();
        }

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
        return redirect('/createartist');
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
