<?php

namespace App\Http\Controllers;

use App\Mail\Mailsend;
use App\Models\Mail as ModelsMail;
use App\Models\SubjectMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function index(){
        $subjects = SubjectMail::all();
        return view("pages.contact", compact("subjects"));
    }
    public function store(Request $request){

        $newmail = new ModelsMail;
        $newmail->messageClient = $request->messageClient;
        $newmail->email = $request->email;
        $newmail->subject_mails_id = $request->subject_mails_id;
        $newmail->save();

        Mail::to("viovio@vio")->send(new Mailsend($request));
        return redirect()->back();
    }

    public function indexBackendMail(){
        $mails = ModelsMail::all();
        return view("pages.mails.mails", compact("mails"));
    }
}
