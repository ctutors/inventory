<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            align-items: center;
        }
        .sidebar img {
            width: 60px;
            border-radius: 70%;
            margin-bottom: 10px;
        }
        .sidebar h1 {
            color: hotpink;
            margin-bottom: 20px;
        }
        .profile {
            text-align: center;
            margin-bottom: 15px;
        }
        .nav-item {
            background-color: #444;
            margin-bottom: 10px;
            border-radius: 4px;
            width: 100%;
        }
        .nav-item a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            font-size: 16px;
            text-align: center;
        }
        .nav-item a:hover {
            background-color: pink;
            color: red;
        }
        .main {
            flex-grow: 1;
            background-color: #f0f0f0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .menu-icon {
            font-size: 20px;
            cursor: pointer;
        }
        .logout-button {
            background-color: transparent;
            border: none;
            color: #333;
            font-size: 16px;
            cursor: pointer;
        }
        .content {
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>ON THE GO MOBILE REPORTING</h1>
        <div class="profile">
            <img src="passport.jpg" alt="Profile">
            <p>Gomez</p>
        </div>
        <div class="nav-item"><a href="#">Dashboard</a></div>
        <div class="nav-item"><a href="#">Campaigns</a></div>
        <div class="nav-item"><a href="#">Revenue Management</a></div>
        <div class="nav-item"><a href="#">Accounts Receivable</a></div>
        <div class="nav-item"><a href="#">Configuration</a></div>
        <div class="nav-item"><a href="#">Stats</a></div>
    </div>
    <div class="main">
        <div class="header">
            <div class="menu-icon">☰</div>
            <button class="logout-button">Logout</button>
        </div>
        <div class="content">
            <h2>Gomez Dashboard</h2>
        </div>
    </div>
</body>
</html>
