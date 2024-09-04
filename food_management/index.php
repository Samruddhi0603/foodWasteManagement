<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Waste Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            text-align: center;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 50px 20px;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #27ae60;
        }
        p {
            color: #333333;
            line-height: 1.6;
        }
        .blocks {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .block {
            width: 40%;
            padding: 20px;
            background-color: #27ae60;
            color: white;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .block:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="overlay">
        <div class="container">
            <h1>Food Waste Management</h1>
            <p>Every year, a significant amount of food is wasted while millions go hungry. By donating excess food to those in need, we can make a difference. Your contribution can help reduce waste and feed the hungry.</p>
            
            <div class="blocks">
                <div class="block" onclick="window.location.href='donate.php'">
                    <h2>Donate Food</h2>
                    <p>Click here if you have excess food to donate.</p>
                </div>
                <div class="block" onclick="window.location.href='receive.php'">
                    <h2>Receive Food</h2>
                    <p>Click here if you need food assistance.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
