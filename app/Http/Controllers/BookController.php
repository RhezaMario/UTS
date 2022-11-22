<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\book_category;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function Home(){
        $data = Book::paginate(8);
        $title = "Home";
        return view('welcome', compact('data', 'title'));
    }
    public function bookview($title)
    {
        if(Book::where('title', $title)->exists()){
            $book = Book::where('title', $title)->first();
            $title = "Home";
            return view('BookDetails', compact('book', 'title'));
        }
        else{
            return redirect('/Home')->with('status', "not available");
        }
    }
    public function category($name){
        $category = Category::where('name', $name)->first();
       $books = DB::table('books')
                ->join('book_categories', 'books.id', '=', 'book_categories.book_id')
                ->join('categories', 'categories.id', '=', 'book_categories.category_id')
                ->where('categories.name', '=', $name)->get();
        $title = "Category";
        return view('BookCategory', compact('books', 'title', 'category'));
        }


    public function publish(){
        $data = Publisher::paginate(8);
        $title="publisher";
        return view('Publishers', compact('data', 'title'));
    }
    public function publishview($name){
        if(Publisher::where('name', $name)->exists()){
            $pub = Publisher::where('name', $name)->first();
            $title = "Publisher";
            $book = Book::where('publisher_id', $pub->id)->get();
            return view('PublisherDetail', compact('pub', 'title', 'book'));
        }
        else{
            return redirect('/Publishers')->with('status', "not available");
        }
    }
}
