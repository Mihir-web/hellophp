<?php
class Book {
    private $book_title;
    private $book_author;
    private $published_year;


    // constructor
    public function __construct($book_title, $book_author, $published_year) {
        $this->book_title = $book_title;
        $this->book_author = $book_author;
        $this->published_year = $published_year;
    }

    // setter method for book title
    public function setBookTitle($book_title) {
        $this->book_title = $book_title;
    }

    // setter method for book author
    public function setBookAuthor($book_author) {
        $this->book_author = $book_author;
    }

    // setter method for published book year
    public function setPublishedYear($published_year) {
        $this->published_year = $published_year;
    }

    // getter method for book title
    public function getBookTitle(): string {
        return $this->book_title;
    }

    // setter method for book author
    public function getBookAuthor(): string {
        return $this->book_author;
    }

    // setter method for book published year
    public function getPublishedYear(): string {
        return $this->published_year;
    }

    // Method for displaying book detail
    public function displayBook(): string {
        return $this->book_title . " by " . $this->book_author . " (Published on: " . $this->published_year . ")";
    }
}
?>
