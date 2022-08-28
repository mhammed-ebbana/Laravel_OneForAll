<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Session;

class clientcompt extends Controller
{
    //
        public function UpdateComptClient(){
// dd(request()->Password);
try{
     $personid=DB::select('SELECT p.ID from person p inner join compt c on c. PersonId=p.ID  where c.ID='.request()->session()->all()['clientID']);
    //   dd($personid,request());
// dd('UPDATE person set LastName=,FirstName=?,Date_Of_Birth=?,Country=?,Phone=? where ID=?', [request()->First_name, request()->Birth_date, request()->country, request()->Phone,$personid]);
// dd(request()->Last_name,request()->First_name,request()->Birth_date);
// dd('UPDATE person set LastName='.request()->Last_name.',FirstName='.request()->First_name.',Date_Of_Birth='.request()->Birth_date.',Country='.request()->country.',Phone='.request()->Phone.' where ID='.$personid[0]->ID);
//    $op=  DB::update('UPDATE person set LastName='.request()->Last_name.',FirstName='.request()->First_name.',Date_Of_Birth='.request()->Birth_date.',Country='.request()->country.',Phone='.request()->Phone.' where ID='.$personid[0]->ID);
DB::update('UPDATE  person set LastName=?,FirstName=?,Date_Of_Birth=?,Country=?,Phone=? where ID=?', [request()->Last_name,request()->First_name, request()->Birth_date, request()->country, request()->Phone,$personid[0]->ID]);

  if(request()->Password!=null || request()->Password==request()->Password_confirm)
  {
    $hashedPassword = Hash::make(request()->Password);
    DB::update('UPDATE compt set Pasword=? where ID=?', [$hashedPassword,request()->session()->all()['clientID']]);

  }


    return redirect('/compt');
    }
    catch(e){
        return redirect('/search');
    }


        }

        public function GetComptClientPage(){
            $client=DB::select('SELECT p.FirstName as fn,p.LastName as ln,p.Date_Of_Birth as bd, p.Country as co,p.Phone as ph,c.Email as em,c.Pasword as pa FROM person p INNER JOIN compt c on p.ID=c.PersonId WHERE c.ID = '.request()->session()->all()['clientID']);
            return view('pages.client.client_compt',['client' => $client]);
        }
}
