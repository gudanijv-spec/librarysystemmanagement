JavaScript

document.getElementById('bookForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simple Validation
    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    
    if (title === "" || author === "") {
        alert("Please fill in all fields");
        return;
    }

    // In a real app, you would use fetch() to send this to a PHP/Node server
    addBookToTable(title, author);
    this.reset();
});

function addBookToTable(title, author) {
    const tableBody = document.getElementById('bookBody');
    const row = document.createElement('tr');
    
    row.innerHTML = `
        <td>#</td>
        <td>${title}</td>
        <td>${author}</td>
        <td><span class="status available">Available</span></td>
        <td><button onclick="deleteRow(this)" style="background: #e74c3c;">Delete</button></td>
    `;
    
    tableBody.appendChild(row);
}

function deleteRow(btn) {
    if(confirm("Are you sure you want to delete this book?")) {
        const row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
}