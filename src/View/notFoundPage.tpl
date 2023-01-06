<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            margin-bottom: 15px;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        table {
            border: 1px black solid;
            margin: 20px;
        }

        td {
            border: 1px gray solid;
            padding: 5px;
        }

        div.not-found-block {
            width: 100%;
            margin-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="topnav">
            <a href="/todo">Home</a>
            <a class="active" href="/todo/list">ToDo's List</a>
        </div>
    </header>
    <main>
        <div class="not-found-block">
            <h2>Page is not found :(</h2>
            <br>
            <div>
                <img src="https://i.kym-cdn.com/entries/icons/mobile/000/026/489/crying.jpg" height="300">
            </div>
        </div>
    </main>
</body>
</html>