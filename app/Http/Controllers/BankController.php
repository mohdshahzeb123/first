<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function index() {
        return view('home');
    }
    
    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function createAccount(Request $req){
        
        if($req->input("submit"))
        {
          $res=  DB::select("select * from account");
        $x=sizeof($res);
        $ac="SBI";
        if($x>0)
        {
            $x=$x+101;
            $ac=$ac.$x;
        }
        else
        $ac="SBI101";
$p=$req->input('p');
$n=$req->input('n');
$fn=$req->input('fn');
$e=$req->input('e');
$ph=$req->input('ph');
$gender=$req->input('gender');
$c=$req->input('c');
$s=$req->input('s');
$ct=$req->input('ct');
$a=$req->input('a');
DB::select("insert into account values('$ac','$p','$n','$fn','$e','$ph','$gender','$c','$s','$ct','$a')");

return view('create',["msg"=>"Account Created Successfully with account nubmber $ac"]);

        }
        else
        return view('create',["msg"=>""]);
    }

    public function withdraw(Request $req) {
        if($req->session()->exists("loguser"))
        {
            $am=$req->input("a");
        $ac=$req->session()->get("loguser");
       $res= DB::select("select * from account where acno='$ac'");
    $camt=$res[0]->amount;
    if($camt>=$am)
    {
        $camt=$camt-$am;
        DB::select("update account set amount='$camt' where acno='$ac'");
        return view('withdraw',["name"=>$req->session()->get("name"),"msg"=>"After withdraw $am Your Current balcne is = $camt"]);        
    }
    else
        return view('withdraw',["name"=>$req->session()->get("name"),"msg"=>"Insuficient blance"]);
        }
        else
        return redirect("/login");
    }
    public function fundtransfer(Request $req) {
        if($req->session()->exists("loguser"))
        {
        return view('fund',["name"=>$req->session->get("name")]);
        }
        else
        return redirect("/login");
    }
    
    public function pinChange(Request $req) {
        if($req->session()->exists("loguser"))
        {
        return view('pin',["name"=>$req->session->get("name")]);
        }
        else
        return redirect("/login");
    }
    public function summary(Request $req) {
        if($req->session()->exists("loguser"))
        {
        return view('sumery',["name"=>$req->session->get("name")]);
        }
        else
        return redirect("/login");
    }
    
    public function deposite(Request $req) {
        if($req->session()->exists("loguser"))
        {
            $am=$req->input("a");
        $ac=$req->session()->get("loguser");
       $res= DB::select("select * from account where acno='$ac'");
    $camt=$res[0]->amount;
    
        $camt=$camt+$am;
        DB::select("update account set amount='$camt' where acno='$ac'");
        return view('deposite',["name"=>$req->session()->get("name"),"msg"=>"After deposite $am Your Current balance is = $camt"]);        
    
    
        }
        else
        return redirect("/login");
    }
    public function login(Request $req) {
        if(isset($_REQUEST['login']))
        {
            $ac=$req->input('ac');
            $p=$req->input('p');
            $res=DB::select("select * from account where acno='$ac' and pin='$p'");
            $x=sizeof($res);
            if($x>0)
            {
                $req->session()->put('loguser',$ac);
                $req->session()->put('name',$res[0]->name);
                
        return redirect("/");
            }
            else
            return view('login',["msg"=>"Invalid user Name or password"]);

    }
        else
        return view('login',["msg"=>""]);
    }
    
}
