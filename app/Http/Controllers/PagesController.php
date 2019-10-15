<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    } 
    public function employees(){
     return view('pages.companiespage.employees');
    }
    public function companies(){
     return view('pages.companiespage.companies');
    } 
}
