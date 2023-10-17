<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\suport\facades\DB;


class JoinController extends Controller
{
    function showData(){
        return DB::table('inscriptions')
        ->join('employees','id',"=",'inscriptions.id')
        ->where('employees.id',"3")
        ->get();
    }
}
