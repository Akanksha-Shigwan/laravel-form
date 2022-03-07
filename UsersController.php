<?php

namespace App\Http\Controllers;

use App\addmember;
use App\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function index(){
        return DB::select("select * from addmembers");
    }

    function getData(Request $req){
        $addmember = new addmember;
        $addmember->name = $req->name;
        $addmember->email = $req->email;
        $addmember->save();
        redirect("home");
    }

    function formData(Request $req){
        $contact = new contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->gender = $req->gender;
        $contact->message = $req->message;
        $contact->save();
        return redirect('contact');
    }
}
