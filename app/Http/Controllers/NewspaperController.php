<?php

namespace App\Http\Controllers;

use App\Mail\SendNewsletter;
use App\Models\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewspaperController extends Controller
{
    public function store(Request $request){

        $newspaper  = new Newspaper;
        $newspaper->email = $request->email;
        $newspaper->save();
        Mail::to("erf@erf")->send(new SendNewsletter($request));
        return redirect()->back();
    }
}
