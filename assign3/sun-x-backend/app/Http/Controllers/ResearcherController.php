<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Researcher;

class ResearcherController extends Controller
{
    public function index(){
        return view('add-researcher-form');
    }

    public function store(Request $request){
        $researcher = new Researcher;
        $researcher->login_id = $request->loginId;
        $researcher->picture_path = $request->picture_path;
        $researcher->name = $request->name;
        $researcher->password = $request->password;
        $researcher->save();
        return redirect('list-researchers')->with('status', 'New researcher inserted');
    }

    public function listResearchers(){
        $researchers = Researcher::all();
        return view('list-researchers', ['researchers'=>$researchers]);
    }
}