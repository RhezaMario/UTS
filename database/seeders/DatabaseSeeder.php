<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\book_category;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   Category::create([
            'name'=> 'Romance'
        ]);
        Category::create([
            'name'=> 'Action'
        ]);
        Category::create([
            'name'=> 'Fiction'
        ]);
        Category::create([
            'name' => 'Science'
        ]);
        Book::create([
            'publisher_id' => 1,
            'title' => 'Gravitation1',
            'author'=> 'Isaac Wescott',
            'synopsis'=> 'This Book explains how gravitation affects several lifeforms on earth',
            'year' => 2001,
            'image' => 'Dummy_Images/Gravitation.jpg'
        ]);
        Book::create([
            'publisher_id' => 1,
            'title' => 'Gravitation2',
            'author'=> 'Isaac Wescott',
            'synopsis'=> 'This Book explains how gravitation affects several lifeforms on earth',
            'year' => 2001,
            'image' => 'Dummy_Images/Gravitation.jpg'
        ]);
        Book::create([

            'publisher_id' => 1,
            'title' => 'The Maze Runner1',
            'author'=> 'James Dashner',
            'year' => 2002,
            'synopsis'=> 'An action packed fiction books that tells the stories of survivals',
            'image' => 'Dummy_Images/MazeRunner.jpg'
        ]);
        Book::create([

            'publisher_id' => 2,
            'title' => 'The Maze Runner2',
            'author'=> 'James Dashner',
            'year' => 2002,
            'synopsis'=> 'An action packed fiction books that tells the stories of survivals',
            'image' => 'Dummy_Images/MazeRunner.jpg'
        ]);
        Book::create([

            'publisher_id' => 1,
            'title' => 'The Maze Runner3',
            'author'=> 'James Dashner',
            'year' => 2002,
            'synopsis'=> 'An action packed fiction books that tells the stories of survivals',
            'image' => 'Dummy_Images/MazeRunner.jpg'
        ]);
        Publisher::create([
            'name'=>'Gramedia',
            'address'=> 'Jalan Kebun Jeruk',
            'phone'=>'0877854773728',
            'email'=> 'gramedia@email.com',
            'image'=>'Dummy_Images/Gramedia.png'
        ]);
        Publisher::create([
            'name'=>'Elektro',
            'address'=> 'Jalan Kebun Jeruk',
            'phone'=>'0877854773728',
            'email'=> 'elektro@email.com',
            'image'=>'Dummy_Images/Gramedia.png'
        ]);
        book_category::create([
            'book_id'=> 1,
            'category_id'=>4
        ]);
        book_category::create([
            'book_id'=> 2,
            'category_id'=>4
        ]);
        book_category::create([
            'book_id'=> 3,
            'category_id'=>2
        ]);
        book_category::create([
            'book_id'=> 4,
            'category_id'=>2
        ]);
        book_category::create([
            'book_id'=> 5,
            'category_id'=>2
        ]);
        book_category::create([
            'book_id'=> 3,
            'category_id'=>3
        ]);
        book_category::create([
            'book_id'=> 4,
            'category_id'=>3
        ]);
        book_category::create([
            'book_id'=> 5,
            'category_id'=>3
        ]);
        book_category::create([
            'book_id'=> 3,
            'category_id'=>4
        ]);
        book_category::create([
            'book_id'=> 4,
            'category_id'=>4
        ]);
        book_category::create([
            'book_id'=> 5,
            'category_id'=>4
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
