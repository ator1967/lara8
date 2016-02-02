<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Persoane;

class Mycontrol extends Controller
{
   public function index() {
    $persoane=Persoane::all();
    foreach ($persoane  as $pers) {
    	echo $pers->nume;
    } 
    }
    public function store() {
     		$pers = new Persoana;
            $pers->nume       = Input::get('nume');
            $pers->email      = Input::get('email');
            
            $pers->save();

    }

    public function create() {
     return view('insert');
    }

   
}

