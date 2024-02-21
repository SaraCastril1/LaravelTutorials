<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['description'] = 'We willl pleased to help you';
        $viewData['phone'] = '1234567890';
        $viewData['email'] = 'contact@gmail.com';
        $viewData['address'] = 'av2 #50-123';

        return view('home.contact')->with('viewData', $viewData);
    }
}
