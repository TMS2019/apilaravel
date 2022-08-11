<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
class BankController extends Controller

{
	
	public function index()
    {
        $results = DB::table('myguests')->get();
       // var_dump($results);
      
       return response()->json($results); 
         
    }

    public function add(Request $request)
    {
        $results = DB::table('myguests')->insert(['firstname'=>'perdana','lastname'=>'dana',
        'email'=>'perdana@gmail.com','reg_date'=>'2022-08-18 16:20:49']);
        return response()->json($results); 
    }

     
    //
}
