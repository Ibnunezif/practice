<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
use App\Models\Dojo;

class NinjaController extends Controller
{
    public function index()
    {
        $ninjas = Ninja::with("dojo")->orderBy('created_at','desc')->paginate(10);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }
    public function create()
    {
        // ninjas/create
        $dojos=Dojo::All();
        return view('ninjas.create',['dojos'=>$dojos]);
    }
    public function show (Ninja $ninja){
        $ninja ->load('dojo');
        return view('ninjas.show',['ninja'=>$ninja]);
    }
    public function store (Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'skill'=>'required|integer|min:0|max:100',
            'bio'=>'required|string|min:20|max:1000',
            'dojo_id'=>'required|exists:dojos,id',
        ]);
        Ninja::create($validated);
        return redirect()->route('ninja.index')->with('success','Ninja added');
    }

    public function destroy (Ninja $ninja){
        $ninja->delete();
        return redirect ()->route('ninja.index')->with('success','Ninja deleted');
    }
    
    
}
