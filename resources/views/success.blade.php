<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	@if(Session::has('message'))
		<div>{{ Session::get('message') }}</div>
	@endif

</body>
</html>