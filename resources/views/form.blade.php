<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
</head>
<body>

	<form method="POST" action="{{ route('storeproducts') }}">
		@csrf
		<input name='title' placeholder="title">
		<textarea name="description">description</textarea>
		<button type="submit">submit</button>

	</form>
</body>
</html>