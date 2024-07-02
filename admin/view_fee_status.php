<?php
  include("../connection.php");

// SQL query
$sql = "SELECT 
            r.name, 
            r.roll_number, 
            m.room_number, 
            CASE 
                WHEN m.roll_number IS NOT NULL THEN 'Yes' 
                ELSE 'No' 
            END AS status
        FROM 
            registration r
        LEFT JOIN 
            mess_fees m ON r.roll_number = m.roll_number";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start table with styling
    echo "<table border='1' style='border-collapse: collapse; width: 80%; margin: 20px auto;'>
            <tr style='background-color: #f2f2f2;'>
                <th style='padding: 10px;'>S.No</th>
                <th style='padding: 10px;'>Name</th>
                <th style='padding: 10px;'>Roll Number</th>
                <th style='padding: 10px;'>Room Number</th>
                <th style='padding: 10px;'>Status</th>
            </tr>";

    // Initialize serial number
    $serialNumber = 1;

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Assign random room number if not present
        if (is_null($row["room_number"])) {
            $row["room_number"] = mt_rand(100, 499);
        }

        // Print each row
        echo "<tr>
                <td style='padding: 10px; text-align: center;'>" . $serialNumber++ . "</td>
                <td style='padding: 10px;'>" . $row["name"] . "</td>
                <td style='padding: 10px;'>" . $row["roll_number"] . "</td>
                <td style='padding: 10px; text-align: center;'>" . $row["room_number"] . "</td>
                <td style='padding: 10px; text-align: center;'>" . $row["status"] . "</td>
              </tr>";
    }

    // End table
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
