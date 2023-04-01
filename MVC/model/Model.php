<?php
include_once("model/Book.php");
class Model{
    public function getbooklist(){
        $book_data=array("Himu Shomogro"=>new Book("Himu Shomogro","A nasty book","Humayun Ahmed"),"Shesher kobita"=>new Book("Shesher kobita","A romantic book","Robindronath Tagore"),"Bidrohi"=>new Book("Bidrohi","A ajaira book","kazi Nazrul Islam"));

        return $book_data;
    }
    public function getbook($title){
        $allBooks=$this->getbooklist($title);
        return $allBooks[$title];
    }
}

?>