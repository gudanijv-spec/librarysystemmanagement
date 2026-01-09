<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Library Management System</h1></header>

    <main>
        <section class="form-container">
            <h2>Add New Book</h2>
            <form action="process.php" method="POST">
                <input type="text" name="title" placeholder="Book Title" required>
                <input type="text" name="author" placeholder="Author" required>
                <input type="text" name="isbn" placeholder="ISBN" required>
                <button type="submit" name="add_book">Add Book</button>
            </form>
        </section>

        <section class="data-container">
            <h2>Book Inventory</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM Books");
                    while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['book_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a href="process.php?delete_id=<?php echo $row['book_id']; ?>" 
                               onclick="return confirm('Delete this book?')" 
                               style="color:red;">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>