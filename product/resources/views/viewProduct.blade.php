<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>
     
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
    
    <h3> Product List</h3>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>Name</td>
			<td>Price</td>
            <td>image</td>
            <td>Action</td>
		</tr>
        @foreach ($productList as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><img src="{{asset('/upload/'.$product->image)}}" alt="" width="100px" height="100px"></td>
                <td>
                    <a href="{{route('product.show',$product->id)}}"> Details</a> |
                    <a href="/product/{{$product->id}}/edit"> Edit</a> |
                    <a href="/product/delete/{{$product->id}}"> Delete</a> 
                </td>
            </tr>
        @endforeach
 	</table>
</body>
</html>