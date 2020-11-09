<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
</head>
<body>

	<form method="POST" action="{{ route('storeupdates') }}">
		@csrf
		<input name="id" type="hidden" value="{{ $product->id }}">
		<input name='title' value="{{ $product->title }}">
		<textarea name="description">{{ $product->description }}</textarea>
		<button type="submit">submit</button>

	</form>
</body>
</html>