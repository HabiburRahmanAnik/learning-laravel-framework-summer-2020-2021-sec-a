<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <a href="/user/userlist">back</a> | <a href="/logout">logout</a> <br><br><br>

    <h3>User Details</h3>

    <table border="1">

        <tr>
            <td>Id</td>
            <td>{{$user['id']}}</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>{{$user['username']}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>type</td>
            <td>{{$user['type']}}</td>
        </tr>

    </table>
</body>
</html>