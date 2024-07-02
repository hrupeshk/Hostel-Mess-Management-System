<?php
// Database connection
include("../connection.php");

// Count total number of users in registration table
$sql_total_users = "SELECT COUNT(DISTINCT roll_number) AS total_users FROM registration";
$result_total_users = $conn->query($sql_total_users);
$total_users = 0;
if ($result_total_users->num_rows > 0) {
    $row = $result_total_users->fetch_assoc();
    $total_users = $row['total_users'];
}

// Count total number of users who have paid mess fees in mess_fees table
$sql_paid_users = "SELECT COUNT(DISTINCT roll_number) AS paid_users FROM mess_fees";
$result_paid_users = $conn->query($sql_paid_users);
$paid_users = 0;
if ($result_paid_users->num_rows > 0) {
    $row = $result_paid_users->fetch_assoc();
    $paid_users = $row['paid_users'];
}

// Calculate the percentage of users who have paid the mess fees
$percentage_paid = 0;
if ($total_users > 0) {
    $percentage_paid = ($paid_users / $total_users) * 100;
}

// Close database connection
$conn->close();
?>

<div class="mess-fee-status-container">
    <h2>Mess Fee Payment Status</h2>
    <div class="percentage"><?php echo round($percentage_paid, 2); ?>% have paid.</div>
    <a href="full_report.php" class="report-link">View full report</a>
</div>

<style>
    .mess-fee-status-container {
        max-width: 300px;
        height: 200px;
        padding: 15px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 20px; /* Added margin to separate from previous content */
    }
    .mess-fee-status-container h2 {
        color: #333;
        margin-bottom: 20px;
    }
    .percentage {
        font-size: 1.4em;
        color: white;
        margin-top: 2.2rem;
        margin-bottom: 1.6rem;
        background-color:#007bff;
    }
    .report-link {
        display: block;
        margin-top: 20px;
        font-size: 1.3em;
        color: #007bff;
        text-decoration: none;
    }
    .report-link:hover {
        text-decoration: underline;
    }
</style>
