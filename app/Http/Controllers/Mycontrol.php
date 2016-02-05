<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Persoane;
use Session;

class Mycontrol extends Controller
{
    public function index()
    {
        $persoane=Persoane::paginate(4);
        return view('home')->with('persoane', $persoane );
    }

    public function create()
    {
     return view('insert');
    }

    public function store(Request $request)
    {
       $pers= new Persoane;
       $pers->nume = $request->input('nume');
       $pers->email = $request->input('email');
       $pers->save();

       Session::flash('message', 'Adaugat cu succes!');
            return redirect('/Persoane/create');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $pers = Persoane::find($id);
        return view('edit')->with('pers',$pers);
    }

    public function update(Request $request, $id)
    {
       $pers = Persoane::find($id);
       $pers->nume = $request->input('nume');
       $pers->email = $request->input('email');
       $pers->save();
       return redirect('home');
    }
        public function delete($id)
    {
        Persoane::find($id)->delete();
       //Session::flash('message', 'Sters cu succes!');
        echo 'Am sters id'.$id;
        return redirect('home');
    }

 
    

}
