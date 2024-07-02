<?php
// Database connection details
include("../connection.php");
// SQL query to select all data from the registration table
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Border's List ....................</title>
    <style>
        table {
            width: 100%;
            height: 60vh;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
   <script>
    function deleteRow(rollNumber) {
        if (confirm('Are you sure you want to delete this record?')) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_border.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText == "Record deleted successfully") {
                        var row = document.getElementById('row_' + rollNumber);
                        row.parentNode.removeChild(row);
                        updateSerialNumbers();
                    } else {
                        alert('Error deleting record: ' + xhr.responseText);
                    }
                }
            };

            xhr.send("roll_number=" + encodeURIComponent(rollNumber));
        }
    }

    function updateSerialNumbers() {
        var table = document.querySelector("table");
        var rows = table.querySelectorAll("tr");
        var serialNo = 1;

        for (var i = 1; i < rows.length; i++) { // start from 1 to skip the header row
            var cells = rows[i].querySelectorAll("td");
            if (cells.length > 0) { // check if it's not an empty row
                cells[0].textContent = serialNo++;
            }
        }
    }
</script>

</head>
<body>
    <h2>Border's List ....................</h2>
    <table>
        <tr>
            <th>Serial No</th>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Permanent Address</th>
            <th>Temporary Address</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            $serial_no = 1; // Initialize serial number
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr id='row_" . $row["roll_number"] . "'>
                        <td>" . $serial_no . "</td>
                        <td>" . htmlspecialchars($row["name"]) . "</td>
                        <td>" . htmlspecialchars($row["roll_number"]) . "</td>
                        <td>" . htmlspecialchars($row["email"]) . "</td>
                        <td>" . htmlspecialchars($row["mobile_number"]) . "</td> 
                        <td>" . htmlspecialchars($row["permanent_address"]) . "</td>
                        <td>" . htmlspecialchars($row["temporary_address"]) . "</td>
                        <td><button onclick='deleteRow(\"" . $row["roll_number"] . "\")'>Delete</button></td>
                      </tr>";
                $serial_no++;
            }
        } else {
            echo "<tr><td colspan='9'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
