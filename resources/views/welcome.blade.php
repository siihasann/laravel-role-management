<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Role Management Application</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600,700" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #f4f4f9;
            color: #333;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #2c3e50;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
        }

        .container h2 {
            font-size: 2em;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 40px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }

        .footer {
            background: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Role Management App</h1>
    </div>

    <div class="container">
        <h2>Welcome to the Role Management System</h2>
        <p>Manage user roles and permissions with ease.</p>
        <a href="{{ url('/home') }}" class="button">Go to Dashboard</a>
    </div>

    <div class="footer">
        <a href="#">Privacy Policy</a> |
        <a href="#">Terms of Service</a> |
        <a href="#">Contact Us</a>
    </div>
</body>
</html>
