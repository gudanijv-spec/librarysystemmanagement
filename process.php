<?php
include 'db_config.php';

// ADD BOOK (Create)
if (isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO Books (title, author, isbn) VALUES ('$title', '$author', '$isbn')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect back to the main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// DELETE BOOK (Delete)
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM Books WHERE book_id=$id");
    header("Location: index.php");
}
?>