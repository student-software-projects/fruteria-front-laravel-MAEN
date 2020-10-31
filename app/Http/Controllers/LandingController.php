<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
public function index(){
return view('landing.index');
}
public function contacto(){
return view('landing.contacto');
}
public function acercade(){
return view('landing.acercade');
}
public function domicilios(){
return view('landing.domicilios');
}

}

