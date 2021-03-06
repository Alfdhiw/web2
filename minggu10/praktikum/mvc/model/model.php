<?php
include_once("model/book.php");
class Model {
public function getBookList(){
// here goes some hardcoded values to simulate the 
return array (
"Jungle Book" => new Book("Jungle Book", "R. Kipling", 
"A classic book."),
"PHP for Dummies" => new Book("PHP for Dummies", "Some 
Smart Guy", ""),
"Moonwalker" => new Book("Moonwalker", "J. Walker", 
"")

);
}
public function getBook($title){
// we use the previous function to get all the books
// and then we return the requested one.
// in a real life scenario this will be done through
// a database select command
$allBooks = $this->getBookList();
return $allBooks[$title];
}
}
?>