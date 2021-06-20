<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
     
    <a href='{{route('product.create')}}'> Back </a> |
    <a href='/logout'> logout</a> 
    
    <h3> Product Details</h3>
	<table border="1">
        <tr>
			<td>Image</td>
            <td><img src="{{asset('upload/'.$product->image)}}" alt="img" width="200px" height="200px"></td>
        </tr>
		<tr>
            <td>ID</td>
			<td>{{$product->id}}</td>
        </tr>
        <tr>
			<td>Name</td>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            <td>Price</td>
			<td>{{$product->price}}</td>
        </tr>
 	</table>
</body>
</html>