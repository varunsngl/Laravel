<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
</head>
<body>
	So Here are all my products:

	<ul>
		
		@foreach($products as $product)

			<li><a href="http://127.0.0.1:8000/products/{{ $product->id }}">{{ $product->description }}</a></li>

		@endforeach

	</ul>
</body>
</html>