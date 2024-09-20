<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="parent_div">
        <fieldset>
            <legend>Add a New Book</legend>
            <form action="Task1_backend.php" method="POST">
                <input type="text" id="book_title" name="book_title" required Placeholder="Book Title*">
                <br>
                <br>
                <input type="text" id="book_author" name="book_author" required Placeholder="Author Name*">
                <br>
                <br>
                <input type="number" id="published_year" name="published_year" required Placeholder="Published Year*">
                <br>
                <br>
                    * indicates required field
                <br>
                <br>
                <input type="submit" value="Add Book">
            </form>
        </fieldset>
    </div>
</body>
</html>
