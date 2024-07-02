<div class="feedback-container">
    <h2>Feedback Ratings</h2>
    <?php
  include("../connection.php");
    // SQL query to calculate average ratings for each question
    $sql = "
        SELECT 
            AVG(overall_satisfaction) AS avg_overall_satisfaction,
            AVG(taste_flavor) AS avg_taste_flavor,
            AVG(variety_food) AS avg_variety_food,
            AVG(nutritional_value) AS avg_nutritional_value,
            AVG(cleanliness_hygiene) AS avg_cleanliness_hygiene,
            AVG(service_quality) AS avg_service_quality
        FROM feedback
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Extract average ratings
        $avg_ratings = array(
            'Overall Satisfaction' => round($row['avg_overall_satisfaction'], 1),
            'Taste and Flavor' => round($row['avg_taste_flavor'], 1),
            'Variety of Food' => round($row['avg_variety_food'], 1),
            'Nutritional Value' => round($row['avg_nutritional_value'], 1),
            'Cleanliness and Hygiene' => round($row['avg_cleanliness_hygiene'], 1),
            'Service Quality' => round($row['avg_service_quality'],1)
        );

        echo "<table class='rating-table'>";
        echo "<tr><th>Question</th><th>Average Rating</th></tr>";

        foreach ($avg_ratings as $question => $avg_rating) {
            echo "<tr>";
            echo "<td>$question</td>";
            echo "<td class='average-rating'>";
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $avg_rating) {
                    echo "<span class='star'>&#9733;</span>"; // filled star
                } else {
                    echo "<span class='star'>&#9734;</span>"; // empty star
                }
            } 
            echo " ($avg_rating)";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No feedback available.";
    }

    // Close database connection
    $conn->close();
    ?>
</div>

<style>
    .feedback-container {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 20px;
        width: 120%;
    }
    .feedback-container h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    .rating-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .rating-table th, .rating-table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }
    .rating-table th {
        background-color: #f2f2f2;
    }
    .star {
        font-size: 20px;
        color: #f0ad4e;
        margin-right: 5px;
    }
    .average-rating {
        display: flex;
        align-items: center;
    }
</style>
