<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class User extends Controller
{

    //

    public function index(){

       $result= DB::table('users')->join('employee','employee.employee_id','=','users.id')->select('name','email','employee_name')->get();

        echo "<pre>";
        print_r($result);
        exit;

       

    }


}
