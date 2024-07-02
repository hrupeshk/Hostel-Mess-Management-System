<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Report of Mess Fees</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1300px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .report-table th, .report-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .report-table th {
            background-color: #f2f2f2;
        }
        .serial-number {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Full Report of Mess Fees</h2>
    <?php
    // Database connection
    include("../connection.php");

    // SQL query to fetch all data from mess_fees table
    $sql = "SELECT * FROM mess_fees";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='report-table'>";
        echo "<tr>
                <th class='serial-number'>#</th>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Room Number</th>
                <th>Month</th>
                <th>Date</th>
                <th>Dues</th>
                <th>Fine</th>
                <th>Total</th>
              </tr>";
        $serial_number = 1;
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='serial-number'>" . $serial_number++ . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['roll_number'] . "</td>";
            echo "<td>" . $row['room_number'] . "</td>";
            echo "<td>" . $row['month'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['dues'] . "</td>";
            echo "<td>" . $row['fine'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close database connection
    $conn->close();
    ?>
</div>
</body>
</html>
