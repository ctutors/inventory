
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('back.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px; /* Ensures spacing on small screens */
            box-sizing: border-box;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px 20px;
            width: 100%;
            max-width: 320px; /* Prevents stretching on wide screens */
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }
        .login-container h2 {
            color: #ff3366;
            margin-bottom: 10px;
        }
        .login-container h3 {
            color: #444;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .login-container button {
            width: 90%;
            padding: 10px;
            background: #ff3366;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background: #e62e5c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>ON THE GO MOBILE REPORTING</h2>
        <h3>Ctutors Inventory Management System</h3>
        <form action="login.php" method="POST">
            <input placeholder="username" name="username" type="text" />
            <input placeholder="password" name="password" type="password" />
            <button type="submit">Login</button>
