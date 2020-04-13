<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(){
        Mail::to('geekshinobi@gmail.com')
        ->send(new DemoEmail());
    }
}
