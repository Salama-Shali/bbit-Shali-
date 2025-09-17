<?php
$servername = "localhost";
$username   = "root";        
$password   = "2006";        
$dbname     = "bbit_users";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ascending order by ID
$sql = "SELECT id, name, email FROM users ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>List of Signed up Users</h2>";
    echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='5'>";
    echo "<tr>
            <th style='border: 1px solid black;'>ID</th>
            <th style='border: 1px solid black;'>Name</th>
            <th style='border: 1px solid black;'>Email</th>
          </tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td style='border: 1px solid black;'>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td style='border: 1px solid black;'>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
