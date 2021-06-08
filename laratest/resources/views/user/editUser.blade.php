<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
</head>
<body>
    <a href="/user/userlist">back</a> | <a href="/logout">logout</a><br><br/><br/>
    <h2>Edit User</h2>
    <form method="post">
    <table> 
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" value="{{$user['username']}}" ></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="email" name="email" value="{{$user['email']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="sumit"></td>
		</tr>
    <table>
    </form>
</body>
</html>