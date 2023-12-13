<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $lst=User::paginate(5);
        return view('admin.users-index', compact('lst'))->with('i',(request()->input('page',1)-1)*5);

    }
    public function create(){
        return view('admin.user-create');
    }


}