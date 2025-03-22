<!DOCTYPE html>
<html>
<head>
    <title>PHP Docker Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
        }
        .info {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Hello from PHP in Docker!</h1>
    
    <div class="info">
        <?php
        echo "<p>PHP Version: " . phpversion() . "</p>";
        echo "<p>Server time: " . date("Y-m-d H:i:s") . "</p>";
        echo "<p>Server IP: " . $_SERVER['SERVER_ADDR'] . "</p>";
        ?>
    </div>
</body>
</html>