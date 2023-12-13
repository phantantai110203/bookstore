<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        return view('pages.home');
    }
    //
}