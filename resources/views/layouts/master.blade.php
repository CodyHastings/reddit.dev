<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
	@yield('title')
</head>
<body>
	@if (session()->has('successMessage'))
    <div class="alert alert-success">{{ session('successMessage') }}</div>
	@endif
	@if (session()->has('updateMessage'))
    <div class="alert alert-success">{{ session('updateMessage') }}</div>
	@endif
	@if (session()->has('destroyMessage'))
    <div class="alert alert-error">{{ session('destroyMessage') }}</div>
	@endif
	@yield('content')

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>