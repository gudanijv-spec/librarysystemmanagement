-- 1. Books Table
CREATE TABLE Books (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(100),
    isbn VARCHAR(20) UNIQUE,
    status ENUM('Available', 'Borrowed') DEFAULT 'Available'
);

-- 2. Members Table
CREATE TABLE Members (
    member_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    join_date DATE DEFAULT (CURRENT_DATE)
);

-- 3. Loans Table (The Relationship Table)
CREATE TABLE Loans (
    loan_id INT PRIMARY KEY AUTO_INCREMENT,
    book_id INT,
    member_id INT,
    loan_date DATE DEFAULT (CURRENT_DATE),
    return_date DATE,
    FOREIGN KEY (book_id) REFERENCES Books(book_id) ON DELETE CASCADE,
    FOREIGN KEY (member_id) REFERENCES Members(member_id) ON DELETE CASCADE
);

-- Sample Data
INSERT INTO Books (title, author, isbn) VALUES 
('The Great Gatsby', 'F. Scott Fitzgerald', '9780743273565'),
('1984', 'George Orwell', '9780451524935');

INSERT INTO Members (full_name, email) VALUES 
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com');