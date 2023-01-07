<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2023</title>
</head>
<body>
    <h1>Books</h1>
    <?php
    foreach($filter_books as $book):?>
    <h3>Book Name: <?= $book['name']?></h3>
    <h4>Author Name : <?= $book['author']?></h4>
    <h4>Year  : <?= $book['year']?></h4>
    <hr>
    <?php endforeach ?>
</body>
</html>