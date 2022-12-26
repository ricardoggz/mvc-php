<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <ul>
            <?php require'./controllers/BookController.php';
                $book = new BookController();
                $book->getBooks();
                $book->addBook();
            ?>
        </ul>
    </section>
    <section>
        <form action="index.php" method="POST">
            <input type="number" name="book_id">
            <input type="text" name="book_name">
            <button>Add book</button>
        </form>
    </section>
</body>
</html>