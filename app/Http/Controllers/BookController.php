<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    // public function index(): View
    // {
    //     $books = Book::latest()->paginate(5);
    //     return view('books.index', compact('books'));
    // }

    public function index()
    {
      $books = Book::all();
      return view('books.index')->with('books', $books);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Book::create($input);
        return redirect('book')->with('flash_message', 'book Addedd!');
    }
}
