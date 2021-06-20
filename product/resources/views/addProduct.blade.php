<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  
    <h3> Add Product</h3>

	<form method="post" enctype="multipart/form-data">
		@csrf
	<table>
        <tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
        <tr>
			<td>price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
	</table>
	</form>
</body>
</html>