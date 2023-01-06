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
    </style>
</head>
<body>
    <header>
        <div class="topnav">
            <a class="active" href="/todo">Home</a>
            <a href="/todo/list">ToDo's List</a>
        </div>
    </header>
    <main>
        <form method="post" action="/todo/create">
            <fieldset>
                <legend>Create new ToDo</legend>
                <table>
                    <tr>
                        <td>ToDo</td>
                        <td>
                            <input name="newToDo" type="text" required>
                        </td>
                        <td>
                            <input type="submit" value="Create new ToDo">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </main>
</body>
</html>