<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #27ae60;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="date"], textarea {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2ecc71;
        }
    </style>
    <script>
        function showSuccessMessage() {
            alert("Your form is submitted successfully! Waiting for a recipient request to benefit the food.");
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Donate Food</h1>
        <form action="submit_donor.php" method="post" onsubmit="showSuccessMessage(); return false;">
            <label for="donor_name">Your Name:</label>
            <input type="text" id="donor_name" name="donor_name" required>

            <label for="food_item">Food Item:</label>
            <input type="text" id="food_item" name="food_item" required>

            <label for="pickup_details">Pickup Details (Address/Contact):</label>
            <textarea id="pickup_details" name="pickup_details" rows="4" required></textarea>

            <label for="prepared_date">Prepared Date:</label>
            <input type="date" id="prepared_date" name="prepared_date" required>

            <input type="submit" value="Donate">
        </form>
    </div>

</body>
</html>
