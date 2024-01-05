<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected function fixImage(Book $p){

        if ($p->image && Storage::disk('public')->exists($p->image)){
            $p->image = Storage::url($p->image);
        }else{
            // $p->image = '/asset/img/no_image_placeholder.png';
        }


    }


    public function index()
    {
        $lst=Book::all();
        foreach($lst as $p){
            $this->fixImage($p);
        }
        return view('pages.home',['lst'=>$lst]);
    }

    public function index01()
    {
        $lst=Book::all();
        foreach($lst as $p){
            $this->fixImage($p);
        }
        return view('pages.list-book',['lst'=>$lst]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $this->fixImage($book);
        return view('pages.detail',['p'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
