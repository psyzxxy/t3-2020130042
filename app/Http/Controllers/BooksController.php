<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kodebuku'=> 'require|max:13',
            'judul' => 'required|max:255',
            'halaman' => 'required|integer|max:2099',
            'kategori' => 'required|max:255',
            'penerbit' => 'required|max:255',

        ]);

        $books = Books::create($validateData);

        $request->session()->flash('success', "Successfully adding {$validateData['id']}!");
        return redirect()->route('books.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        $validateData = $request->validate([
            'kodebuku'=> 'require|max:13',
            'judul' => 'required|max:255',
            'halaman' => 'required|integer|max:2099',
            'kategori' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'image' => 'required|file|image|max:5000',
        ]);

        $books->update($validateData);
        $request->session()->flash('success', "Successfully updating {$validateData['id']}!");
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        $books->delete();
        return redirect()->route('books.index')->with('success', "Successfully deleting {$books['id']}!");
    }
}
