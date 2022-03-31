<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Imports\UserImport;
use Excel;
use App\Models\User;
use App\Models\prof;
use App\Models\projet;


class PostController extends Controller{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\prof
     *  @return \App\Models\projet
     */
    function value(){
        $data=prof::all();
       
        return $data;
    }
   public function addPfe(Request $request){
        $validatedData = $request->validate([
            'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
    
           ]);
    
    
           $path = $request->file('file')->store('public/images');
           /** get prof id foreign key */
           $id=auth()->user()->id;
           $prof = DB::table('profs')->where('users_id', $id)->first();
          $profID=$prof->id;
    
           $projet = new projet;
           $projet->title = $request->input('title');
           $projet->path= $path;
           $projet->prof_id=$id;
           $projet->description=$request->input('description');
           $projet->save();
    
           return 'amayas';
    }  
};
