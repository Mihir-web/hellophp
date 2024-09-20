<?php
include 'Book.php';

$books = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $book_title = $_POST['book_title'] ?? '';
        $book_author = $_POST['book_author'] ?? '';
        $published_year = (int)$_POST['published_year'] ?? '';

        if (empty($book_title) || empty($book_author) || empty($published_year)) { //Validating all inputes coming ffrom client
            throw new Exception("Please fill all fields");
        }

        if (!is_int($published_year)) { //Checking if the published year value coming as a number or not.
            throw new Exception("Published Year should be number");
        }

        $book = new Book(book_title: $book_title, book_author: $book_author, published_year: $published_year); // Creating the Book object
        $books[] = $book; // Store the book data in the object
        echo "New Book added successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Function to display books in a table
function displayBooks($books) {
    if (count($books) > 0) {
        echo "
        <html>
        <head>
        <title>List of Books</title>
        <link rel='stylesheet' href='./style.css'>
        </head>
        <body>
        <table border='1' class='book_table'>
        <tr>
            <th colspan='3'>List of Books</th>
        </tr>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
            </tr>";

        foreach ($books as $book) {
            echo "<tr>
                <td>" . $book->getBookTitle() . "</td>
                <td>" . $book->getBookAuthor() . "</td>
                <td>" . $book->getPublishedYear() . "</td>
            </tr>";
        }

        echo "</table></body></html>";
    } else {
        echo "No books added yet.";
    }
}

// Display books
displayBooks($books);
?>
