<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
    <h2>Edit product</h2>
    <form method="post" enctype="multipart/form-data">
		@csrf
	<table>
        <tr>
			<td>image</td>
			<td><img src="{{asset('upload/'.$product->image)}}" alt="" width="200px" height="200px">
            </td>
		</tr>
		<tr>
			<td>name</td>
			<td><input type="text" name="name" value="{{$product->name}}"></td>
		</tr>
		<tr>
			<td>price</td>
			<td><input type="text" name="price" value="{{$product->price}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="update"></td>
		</tr>
	</table>
	</form>
</body>
</html>