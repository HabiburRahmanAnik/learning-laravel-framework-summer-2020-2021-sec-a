<html>
    <head>
        <link rel="stylesheet" href="{{asset('style.css')}}" />
    </head>
    <body>
        <h1>  Welcome home! {{$name}}</h1>
        
        <a href='{{route('product.index')}}'> Add Product </a> |
        <a href='{{route('product.create')}}'> View All product </a> |
        <a href='/logout'> 
            logout
           <!-- <input type="button" name="abc" value="submit"/> -->
        </a> 
    </body>
</html>