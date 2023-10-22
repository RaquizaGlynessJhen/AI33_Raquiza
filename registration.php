<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            background-color: #ffffff;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            margin-top: 50px;
            box-shadow: 0px 0px 5px 0px #888888;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #008CBA;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form method="POST" action="registration_process.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Register">
        </form>
    </div>
    <footer>
        <p>Glyness Jhen Kate Raquiza BSIT-AI33</p>
    </footer>
</body>
</html>
