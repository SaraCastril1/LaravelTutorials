<?php

namespace App\Http\Controllers;

use App\Models\Worm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WormController extends Controller
{
        public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Parcial1 - Worms';
        $viewData['subtitle'] =  'Worms';
        return view('worm.index')->with("viewData", $viewData);
    }

    public function register(): View
    {
        $viewData = []; 
        $viewData['title'] = 'Parcial 1 - Register Worms';
        $viewData['subtitle'] = 'Register  A Worm';

        return view('worm.register')->with('viewData', $viewData);
    }


    public function store(Request $request): RedirectResponse
    { 
        Worm::validate($request); 
 
        $newWorm = new Worm(); 
        $newWorm->setName($request->input('name')); 
        $newWorm->setType($request->input('type')); 
        $newWorm->setVelocity($request->input('velocity'));         
        $newWorm->save(); 
 
        return back(); 
        
    }
    public function list(): View
    {
        $viewData = [];
        $viewData['title'] = 'Parcial1 - List';
        $viewData['subtitle'] = 'List Of Worms';
        $viewData['worms'] = Worm::orderBy('velocity', 'desc')->get();

        return view('worm.list')->with('viewData', $viewData);
    }

    public function stadistics()
    {
        $viewData["sandworm"] = Worm::where('type', 'sandworm')->count();
        $viewData["spaceworm"] = Worm::where('type', 'spaceworm')->count();

        return view('worm.stadistics')->with('viewData', $viewData);
    }
}
