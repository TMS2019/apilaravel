<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class BankController extends Controller
{
	
	public function index()
    {
         $results = DB::table('officialreceipt.Bank')->get();
         var_dump($results);
       // echo"fdsfdsf";

         
    }

     
    //
}
