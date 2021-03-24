<?php

namespace App\Http\Controllers;

use App\Mail\Mailsend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        return view("pages.contact");
    }
    public function store(){
        Mail::to("viovio@vio")->send(new Mailsend);
        return redirect("/");
    }
}
