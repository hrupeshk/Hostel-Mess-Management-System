<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mess Feedback Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 20px;
      }
      .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .container h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
      }
      .form-group {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
      }
      .form-group label {
        flex: 1;
        font-weight: bold;
        color: #555;
      }
      .rating {
        display: flex;
        justify-content: flex-end;
        direction: rtl;
      }
      .rating input {
        display: none;
      }
      .rating label {
        cursor: pointer;
        width: 25px;
        height: 25px;
        background-image: url("star-empty.png");
        background-size: contain;
        background-repeat: no-repeat;
        margin-left: 5px;
      }
      .rating input:checked ~ label,
      .rating label:hover,
      .rating label:hover ~ label {
        background-image: url("star-full.png");
      }
      .rating input:checked ~ label:hover,
      .rating input:checked ~ label:hover ~ label {
        background-image: url("star-empty.png");
      }
      .vertical-line {
        border-left: 2px solid #ccc;
        height: 25px;
        margin: 0 15px;
      }
      .textarea-group {
        margin-bottom: 20px;
      }
      .textarea-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
      }
      .textarea-group textarea {
        width: 90%;
        height: 40px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        resize: vertical;
      }
      .form-group input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      .form-group input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Mess Feedback Form</h2>
      <form action="submit_feedback.php" method="post">
        <!-- Rating Questions -->
        <div class="form-group">
          <label for="overall_satisfaction"
            >1. How satisfied are you with the overall quality of the food
            provided in the hostel mess?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="overall_satisfaction1"
              name="overall_satisfaction"
              value="1"
            /><label for="overall_satisfaction1"></label>
            <input
              type="radio"
              id="overall_satisfaction2"
              name="overall_satisfaction"
              value="2"
            /><label for="overall_satisfaction2"></label>
            <input
              type="radio"
              id="overall_satisfaction3"
              name="overall_satisfaction"
              value="3"
            /><label for="overall_satisfaction3"></label>
            <input
              type="radio"
              id="overall_satisfaction4"
              name="overall_satisfaction"
              value="4"
            /><label for="overall_satisfaction4"></label>
            <input
              type="radio"
              id="overall_satisfaction5"
              name="overall_satisfaction"
              value="5"
            /><label for="overall_satisfaction5"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="taste_flavor"
            >2. How would you rate the taste and flavor of the food?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="taste_flavor1"
              name="taste_flavor"
              value="1"
            /><label for="taste_flavor1"></label>
            <input
              type="radio"
              id="taste_flavor2"
              name="taste_flavor"
              value="2"
            /><label for="taste_flavor2"></label>
            <input
              type="radio"
              id="taste_flavor3"
              name="taste_flavor"
              value="3"
            /><label for="taste_flavor3"></label>
            <input
              type="radio"
              id="taste_flavor4"
              name="taste_flavor"
              value="4"
            /><label for="taste_flavor4"></label>
            <input
              type="radio"
              id="taste_flavor5"
              name="taste_flavor"
              value="5"
            /><label for="taste_flavor5"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="variety_food"
            >3. How would you rate the variety of food options available?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="variety_food1"
              name="variety_food"
              value="1"
            /><label for="variety_food1"></label>
            <input
              type="radio"
              id="variety_food2"
              name="variety_food"
              value="2"
            /><label for="variety_food2"></label>
            <input
              type="radio"
              id="variety_food3"
              name="variety_food"
              value="3"
            /><label for="variety_food3"></label>
            <input
              type="radio"
              id="variety_food4"
              name="variety_food"
              value="4"
            /><label for="variety_food4"></label>
            <input
              type="radio"
              id="variety_food5"
              name="variety_food"
              value="5"
            /><label for="variety_food5"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="nutritional_value"
            >4. How satisfied are you with the nutritional value of the food
            provided?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="nutritional_value1"
              name="nutritional_value"
              value="1"
            /><label for="nutritional_value1"></label>
            <input
              type="radio"
              id="nutritional_value2"
              name="nutritional_value"
              value="2"
            /><label for="nutritional_value2"></label>
            <input
              type="radio"
              id="nutritional_value3"
              name="nutritional_value"
              value="3"
            /><label for="nutritional_value3"></label>
            <input
              type="radio"
              id="nutritional_value4"
              name="nutritional_value"
              value="4"
            /><label for="nutritional_value4"></label>
            <input
              type="radio"
              id="nutritional_value5"
              name="nutritional_value"
              value="5"
            /><label for="nutritional_value5"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="cleanliness_hygiene"
            >5. How would you rate the cleanliness and hygiene standards of the
            mess?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="cleanliness_hygiene1"
              name="cleanliness_hygiene"
              value="1"
            /><label for="cleanliness_hygiene1"></label>
            <input
              type="radio"
              id="cleanliness_hygiene2"
              name="cleanliness_hygiene"
              value="2"
            /><label for="cleanliness_hygiene2"></label>
            <input
              type="radio"
              id="cleanliness_hygiene3"
              name="cleanliness_hygiene"
              value="3"
            /><label for="cleanliness_hygiene3"></label>
            <input
              type="radio"
              id="cleanliness_hygiene4"
              name="cleanliness_hygiene"
              value="4"
            /><label for="cleanliness_hygiene4"></label>
            <input
              type="radio"
              id="cleanliness_hygiene5"
              name="cleanliness_hygiene"
              value="5"
            /><label for="cleanliness_hygiene5"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="service_quality"
            >6. How would you rate the service quality of the mess staff?</label
          >
          <div class="vertical-line"></div>
          <div class="rating">
            <input
              type="radio"
              id="service_quality1"
              name="service_quality"
              value="1"
            /><label for="service_quality1"></label>
            <input
              type="radio"
              id="service_quality2"
              name="service_quality"
              value="2"
            /><label for="service_quality2"></label>
            <input
              type="radio"
              id="service_quality3"
              name="service_quality"
              value="3"
            /><label for="service_quality3"></label>
            <input
              type="radio"
              id="service_quality4"
              name="service_quality"
              value="4"
            /><label for="service_quality4"></label>
            <input
              type="radio"
              id="service_quality5"
              name="service_quality"
              value="5"
            /><label for="service_quality5"></label>
          </div>
        </div>

        <!-- Text Questions -->
        
        <div class="textarea-group">
          <label for="suggestions"
            >7. What specific improvements would you suggest for the food
            quality or service?</label
          >
          <textarea
            id="suggestions"
            name="suggestions"
            rows="4"
            required
          ></textarea>
        </div>
        <div class="textarea-group">
          <label for="favorite_dishes"
            >8. What are your favorite dishes that you would like to see more
            often?</label
          >
          <textarea
            id="favorite_dishes"
            name="favorite_dishes"
            rows="4"
            required
          ></textarea>
        </div>
        <div class="textarea-group">
          <label for="issues_faced"
            >9. Have you faced any issues with the food quality or service? If
            yes, please describe.</label
          >
          <textarea
            id="issues_faced"
            name="issues_faced"
            rows="4"
            required
          ></textarea>
        </div>
        <div class="textarea-group">
          <label for="additional_comments"
            >10. Is there anything else you would like to share about your
            experience with the hostel mess food?</label
          >
          <textarea
            id="additional_comments"
            name="additional_comments"
            rows="4"
            required
          ></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit Feedback" />
          </div>
        <!-- <a href="./submit_feedback.php"></a> -->
      </form>
    </div>
  </body>
</html>
