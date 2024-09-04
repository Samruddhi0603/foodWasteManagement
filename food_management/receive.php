<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Food</title>
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
        input[type="text"], input[type="date"] {
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
            alert("Your request is successfully submitted. Waiting for a donor...");
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Receive Food</h1>
        <form action="submit_request.php" method="post" onsubmit="showSuccessMessage(); return false;">
            <label for="beneficiary_name">Your Name:</label>
            <input type="text" id="beneficiary_name" name="beneficiary_name" required>

            <label for="requested_food">Requested Food:</label>
            <input type="text" id="requested_food" name="requested_food" required>

            <label for="req_location">Location:</label>
            <input type="text" id="req_location" name="req_location" required>

            <label for="prepared_date">Prepared Date:</label>
            <input type="date" id="prepared_date" name="prepared_date" required>

            <input type="submit" value="Request Food">
        </form>
    </div>

</body>
</html>
