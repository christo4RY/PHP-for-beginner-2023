<?php

$books = [
    [
        "name" => "book1",
        "author"=>"author1",
        'year'=>'2000'
    ],
    [
        "name"=>"book2",
        "author"=>"author2",
        'year'=>'2001'
    ]
    ];
function filterBooks($books, $item, $search, $fn)
{
    $filter_books = [];
    foreach ($books as $book) {
        if ($fn($book, $item, $search)) {
            $filter_books[]=$book;
        }
    }
    return $filter_books;
}

$filter_books = filterBooks($books, "name", "book2", function ($book, $item, $search) {
    return $book[$item] == $search;
});

require "./index.view.php";
