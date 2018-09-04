<?php

namespace App\Http\Controllers;
use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){

        $email = new Email();

        $email->email = $request['email'];
        $email->send();

        return back()->with("sucess", "Adicionado com sucesso!");
    }
}
