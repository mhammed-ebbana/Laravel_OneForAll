<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;

class clientregister extends Controller
{
    //
    public function GetRegisterPage(){
        //dd(request());
        return view('pages.client.client_register');
    }

    public function RegisterNewClient(){


try{
$insertedperson = DB::insert('INSERT into person (LastName,FirstName,Date_Of_Birth,Country,Phone) values(?,?,?,?,?)', [request()->Last_name,request()->First_name, request()->Birth_date, request()->country, request()->Phone]);

$idperson=DB::select('SELECT ID from person order by id DESC  LIMIT 1');
try{
$hashedPassword = Hash::make(request()->Password);
$insertedcompt= DB::insert('INSERT into compt (Email,Pasword,PersonId,Compt_Cat_Id,State,Create_date,Expier_date) values(?,?,?,?,?,?,?)', [request()->Email,$hashedPassword,$idperson[0]->ID,1,1,date("Y-m-d"),date('Y-m-d', strtotime(' + 1 years'))]);}
catch(e){
    DB::delete('DELETE from person where ID='.$idperson[0]->ID);
    return view('pages.client.client_register');
}

return redirect('/logIn');
}
catch(e){
    return view('pages.client.client_register');
}

    }
}
