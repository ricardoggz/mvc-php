<?php
    require'./models/BookModel.php';
    class BookController{        
        public $book;
        public function __construct(){
            $this->book = new Book();
        }
        public function getBooks(){
            $books = $this->book->getBooks();         
                foreach($books as $book){
                    echo "<li>".$book->book_id." ".$book->book_name."</li>";
                }            
        }
        public function addBook(){
            if($_POST){
                $book_id = $_POST['book_id'];
                $book_name = $_POST['book_name'];
                $this->book->addBook($book_id, $book_name);
            }  
        }
    };
?>