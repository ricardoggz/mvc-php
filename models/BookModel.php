<?php
    require'DatabaseModel.php';
    class Book{
        private $db;
        public function __construct(){
            $this->db= new Database();
        }
        public function getBooks(){
            $rows=$this->db->connection->prepare("SELECT * FROM books");
            $rows->execute();
            $data = [];
            $i = 0;
            while($row = $rows->fetch(PDO::FETCH_OBJ)){
                $data[$i] = $row;
                $i++;
            };
            return $data;
        }
        public function addBook($book_id, $book_name){
            $query=$this->db->connection->prepare(
                "INSERT INTO books(book_id, book_name)
                 VALUES(:book_id, :book_name)
                "
            );
            $query->execute([
                ':book_id'=>$book_id,
                ':book_name'=>$book_name
            ]);
        }
    };
?>