<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;

class BookadminController extends Controller
{

    protected function fixImage(Book $p)
    {
        //tự dowdload hình ảnh bất kỳ vào và để vào thư mục public/img
        if ($p->img && Storage::disk('public')->exists($p->img)) {
            $p->img = Storage::url($p->img);}
            
        // } else {
        //     $p->img = '/img/sgktoan.jpg';
        // }
    }
    public function index()
    {
        $lst = Book::all();
        foreach ($lst as $p) {
            $this->fixImage($p);
        }
        return view('admin.books-index', ['lst' => $lst]);
    }
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
        //
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
    //
}
