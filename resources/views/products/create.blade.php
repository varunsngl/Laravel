<!DOCTYPE html>
<html>
<head>
	<title>Create a new product</title>
</head>
<body>
	<form method="POST" action="/products">
		{{ csrf_field() }}
		Name: <input type="text" name="name">

		<br>
		Description: <input type="text" name="description">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>