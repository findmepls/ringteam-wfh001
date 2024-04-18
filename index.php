<?php
// Check if API key is provided
if(isset($_GET['api_key']) && $_GET['api_key'] === 'qazwsxedc1234') {
    // API key is valid, connect to the database
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from database
    $sql = "SELECT id, name, description FROM your_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
} else {
    // API key is missing or invalid
    echo "Invalid API key";
}
?>
