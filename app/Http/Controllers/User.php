<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;

class User extends Controller
{

    //

    public function index(){

       $users = DB::table('users')->find(3);

        echo "<pre>";
        print_r($users);
        exit;

       

    }


}
