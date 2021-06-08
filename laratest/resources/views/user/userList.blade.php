<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>

    <a href="/home">Back</a> | 
    <a href="/logout">logout</a><br><br>
    <h3>User List</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>Action</th>
        </tr>

        @foreach($userlist as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['username']}}</td>
            <td>
                <a href="/user/userList/detsils/{{$user['id']}}">details</a> |
                <a href="/user/userList/edit/{{$user['id']}}">Edit</a> |
                <a href="/user/userList/delete/{{$user['id']}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </table>
</body>
</html>