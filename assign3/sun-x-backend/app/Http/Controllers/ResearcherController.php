<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Researcher;

class ResearcherController extends Controller
{
    public function add(Request $request){
        return view('edit-researcher-form');
    }

    public function store(Request $request){
        $researcher = new Researcher;
        $picturePath = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $picturePath);

        $researcher->login_id = $request->loginId;
        $researcher->picture_path = $picturePath;
        $researcher->name = $request->name;
        $researcher->password = $request->password;
        if(isset($request->id)){
            $researcher->exists = true;
            $researcher->id = $request->id;
        }
        $researcher->save();

        return redirect('list-researchers')->with('status', 'Researcher inserted');
    }

    public function update(Request $request){
        $id = $request->input('id');
        $researcher = Researcher::find($id);
        return view('edit-researcher-form', ['researcher'=>$researcher]);
    }

    public function listResearchers(){
        $researchers = Researcher::all();
        return view('list-researchers', ['researchers'=>$researchers]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $researcher = Researcher::find($id);
        $login_id = $researcher->login_id;
        $researcher->delete();
        return redirect('list-researchers')->with('status', 'Researcher '.$login_id.' deleted');
    }
}