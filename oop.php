<?php

class Book {
    // Private properties for title and available copies
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book, decreasing the available copies
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "Sorry, no more copies of '{$this->title}' are available to borrow.\n";
        }
    }

    // Method to return a book, increasing the available copies
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for member's name
    private $name;

    // Constructor to initialize the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        $book->borrowBook();
        echo "{$this->name} borrowed '{$book->getTitle()}'.\n";
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);  // John Doe borrows "The Great Gatsby"
$member2->borrowBook($book2);  // Jane Smith borrows "To Kill a Mockingbird"

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
