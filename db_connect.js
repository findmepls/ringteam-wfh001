const mysql = require('mysql');

// Create a connection to the database
const connection = mysql.createConnection({
  host: 'your_database_host',
  user: 'admin',
  password: '1234567890', // Replace with your actual password
  database: 'your_database_name'
});

// Connect to the database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to database:', err);
    return;
  }
  console.log('Connected to database.');
});

// Perform database operations here
// For example:
// connection.query('SELECT * FROM your_table', (error, results, fields) => {
//   if (error) throw error;
//   console.log('Query result:', results);
// });

// Close the database connection when done
// connection.end();
