<?php 

class Book {


    // TODO: Add properties as Private
   private $title;
   private $availableCopies;
   
    
    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties

        $this-> title = $title;
        $this-> availableCopies = $availableCopies;
   
   
        }

   // TODO: Add getTitle method

   function getTitle(){
      return $this->title;
   }
   
   
    
    // TODO: Add getAvailableCopies method
    function getAvailableCopies(){
      return $this->availableCopies;
   }
   
    
   
    // TODO: Add borrowBook method
    function borrowBook(){
      if($this->availableCopies > 0){
         $this->availableCopies--;
         return true;
      }else{
         echo "No more books left.";
         return false;
      };

     }
   
    
   
    // TODO: Add returnBook method

    function returnBook(){
      $this->availableCopies++;
   }
   
   
    
   }
   
   
   class Member {
   
   
    // TODO: Add properties as Private
   private $name;
   
   
    public function __construct($name) {
   
   
         // TODO: Initialize properties
         $this->name = $name;
   
        }
   
   
   
    // TODO: Add getName method
    function getNmae(){
      return $this->name;
    }
   
   
    
    // TODO: Add borrowBook method

    function borrowBook(Book $book){
      if($book->borrowBook()){
         echo $this->name . " successfully borrowed {$book->getTitle()}. <br><br>";
      }else{
         echo $book->getTitle() . " not availeable for borrow! <br><br>";
      }
    }
   
   
    
   
    // TODO: Add returnBook method
    function returnBook(Book $book){
      $book->returnBook();
      echo $this->name . " retunt the {$book->getTitle()} book. <br><br>";
    }
   
    
   }
   
   
   
   // Usage
   
   
   // You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
   
   
   
   // TODO: Create 2 books with the following properties
   //    Book 1 - Name: The Great Gatsby, Available Copies: 5.

   $book1 = new Book("The Great Gatsby",5);

   //    Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
   $book2 = new Book("To Kill a Mockingbird",3);

   // TODO: Create 2 members with the following properties
   //    Member 1 - Name: John Doe
   
   $member1 = new member("John Doe");
   
   //    Member 2 - Name: Jane Smith
   $member2 = new member("Jane Smith");
   
    
   // TODO: Apply Borrow book method to each member
    $member1->borrowBook($book1);
    $member2->borrowBook($book2);

    echo "======================<br><br>";

    
   
   
    
   // TODO: Print Available Copies with their names:

   echo "Available Copies of {$book1->getTitle()}: {$book1->getAvailableCopies()}<br><br>";
   echo "Available Copies of {$book2->getTitle()}: {$book2->getAvailableCopies()}<br><br>";
?>