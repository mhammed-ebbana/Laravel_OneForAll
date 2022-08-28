<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Session;

class clientlogin extends Controller
{
    //
    public function CheckClientExistant()
    {
        //return dd(request()->client_email);
        //1 error
        //2 log success
        //0 first time
        $isloged=false;
        $clientId=null;
        $clientlist = DB::select("SELECT ID,Email,Pasword from compt");

        for($i=0;$i<count($clientlist);$i++)
        {
            if($clientlist[$i]->Email==request()->client_email && Hash::check(request()->client_passwprd,$clientlist[$i]->Pasword)==true){
                $clientId=$clientlist[$i]->ID;
                break;
            }

        }
        //
        //$clientId=DB::select("select ID from  compt where Email='".request()->client_email."' and Pasword ='".request()->client_passwprd."'");

        //
        request()->session()->forget('clientID');
        session(['clientID' => $clientId]);
        if($clientId !=null)

             {
                $isloged=true;
                //return "yes";

                return redirect('/search');
             }
        else
             {
                //return "no";
                request()->session()->forget('clientID');
                // session(['clientID' => null]);
                return view('pages.client.client_Log_in');
            }
      /*  return($_GET['client_passwprd']);
        return $client;
*/
    }




    public function getloginpage(){

       // dd(request());
       return view('pages.client.client_Log_in');


    }
}
