<?php

namespace App\Http\Controllers;


use App\Models\restaurant;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list', ['restaurants' => $data]);
    }
    function add(Request $req)
    {
        $resto = new Restaurant;
        $resto->name =  $req->name;
        $resto->email =  $req->email;
        $resto->address =  $req["address"];
        $resto->save();
        $req->session()->flash('status', 'Restaurant Entered Sucessfully');
        return redirect('list');
    }

    function delete(Request $req, $id)
    {
        $data = restaurant::find($id);
        $data->delete();
        $req->session()->flash('delete', 'Restaurant deleted Sucessfully');
        return redirect('list');
    }

    function edit($id)
    {
        $data = restaurant::find($id);
        return view('edit', ['data' => $data]);
    }
    function update(Request $req, $id)
    {
        $resto = Restaurant::find($id);
        $resto->name = $req->name;
        $resto->email =  $req->email;
        $resto->address =  $req->addres;
        $resto->save();
        $req->session()->flash('status', 'Restaurant Updated Sucessfully');
        return redirect('list');
    }
}
