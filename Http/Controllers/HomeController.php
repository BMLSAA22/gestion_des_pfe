<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Imports\UserImport;
use Excel;
use App\Models\User;
use App\Models\prof;
use App\Models\projet;

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

     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
      
     * @return \App\Models\User
     *@return \App\Models\prof
     *@return \App\Models\projet
     */
    
    public function index()
    {
    
        $type=auth()->user()->type;
        /**   for testing prof relationship */
  $id=auth()->user()->id;
  if($type=='prof'){
   $prof = DB::table('profs')->where('users_id', $id)->first();
  $profID=$prof->id;
  $projets= DB::table('projets')->where('prof_id', $profID)->get();
  };
       $data=User::all();
        
        if ($type=='student'){
            return view('home');
        }elseif($type=='admin'){
            return view('admin',['users' => $data]);
        }elseif ($type=='enterprise'){
            return'enterprise';
        }else return view('prof');
    
    }
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Session::flush();       
        Auth::logout();
        return redirect('login');
    }

    /**
     * credit to amir kadi
     */
    public function import(Request $request){
        Excel::import(new UserImport,
        $request->file('file'));
        return "success";
   
   }
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     * Create a new user instance after a valid registration.
     *
     * 
     *
     */
   public function addPfe(Request $request){
    $this->validate($request,[
		'file' => 'nullable|mimes:pdf,zip',
		'description' => 'required',
		'title' => 'required',
		
	]);
      
       /** get prof id foreign key */
      $path= $request->file('file')->store('docs');
       
      $id=auth()->user()->id;
       $prof = DB::table('profs')->where('users_id', $id)->first();
      $profID=$prof->id;
      $projet=new projet;
       $projet->title = $request->input('title');
       $projet->path= $path;
       $projet->prof_id=$id;
       $projet->description=$request->input('description');
       $projet->save();
       return'success';
}  
}
