<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $overall_satisfaction = $_POST['overall_satisfaction'];
    $taste_flavor = $_POST['taste_flavor'];
    $variety_food = $_POST['variety_food'];
    $nutritional_value = $_POST['nutritional_value'];
    $cleanliness_hygiene = $_POST['cleanliness_hygiene'];
    $service_quality = $_POST['service_quality'];
    $suggestions = $_POST['suggestions'];
    $favorite_dishes = $_POST['favorite_dishes'];
    $issues_faced = $_POST['issues_faced'];
    $additional_comments = $_POST['additional_comments'];

    // Connect to the database
    include("connection.php");

    // Prepare SQL statement to insert data into feedback table
    $sql = "INSERT INTO feedback (overall_satisfaction, taste_flavor, variety_food, nutritional_value, cleanliness_hygiene, service_quality, suggestions, favorite_dishes, issues_faced, additional_comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiiiisss", $overall_satisfaction, $taste_flavor, $variety_food, $nutritional_value, $cleanliness_hygiene, $service_quality, $suggestions, $favorite_dishes, $issues_faced, $additional_comments);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the form page after successful submission
        header("Location: feedback_form.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, redirect back to the form page
    header("Location: feedback_form.php");
    exit();
}
?>
