# library system management by John Vincent Gudani

📚 Library Management System
A modern, web-based solution for managing a library's book inventory, member records, and loan transactions. This project integrates a MySQL database with a PHP backend and a modern CSS dashboard.

🚀 Features
Inventory Management: Add, update, and remove books from the system.

Real-time Status Tracking: Monitor book availability (Available vs. Borrowed).

Data Integrity: Relational database design with Foreign Key constraints to prevent data orphans.

Input Validation: JavaScript-driven client-side validation to ensure data quality.

🛠️ Tech Stack
Frontend: HTML5, CSS, JavaScript 

Backend: PHP

Database: MySQL

Tools: XAMPP

📂 Project Structure
⚙️ Setup Instructions
1. Database Setup
Open phpMyAdmin.

Create a new database named LibraryDB.

Click on the SQL tab and paste the contents of sql/schema.sql.

Execute the query to create tables and insert sample data.

2. File Configuration
Place the project folder in your local server directory (e.g., C:/xampp/htdocs/).

Open db_config.php and ensure your database credentials match:

3. Running the App
Start the Apache and MySQL modules in your XAMPP Control Panel.

Open your browser and navigate to http://localhost/your-folder-name/index.php.

📊 Database Design
The system utilizes three core tables:

Books: Stores title, author, ISBN, and status.

Members: Stores registration details of library users.

Loans: Tracks which member has borrowed which book and the return dates.
