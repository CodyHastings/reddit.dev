<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <style type="text/css">
  #logoutButton {
  background-color: #222;
  border: none;
  color: #9d9d9d;
}
#logoutButton:hover {
  background-color: #222;
  border: none;
  color: white;
}
#logoutLi {
  padding-top: 5px;
  background-color: #222;
}


    </style>
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
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                
      </button>
      <a class="navbar-brand btn" href="/" >CloneRedd</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Home</a></li>
        <li class="nav"><a href="{{action('PostsController@index')}}">All Posts</a></li>
        @if(Auth::check())
        <li><a id="accountButton" href="">Account</a></li>
        <li><a href=""  >Your Posts</a></li>
        <li><a href="{{action('PostsController@create')}}">Create Thread</a></li> 
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(!Auth::check())
        <li><a href="{{action('Auth\AuthController@getRegister')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{action('Auth\AuthController@getLogin')}}"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
        @endif
        @if(Auth::check())
        <li><a href="{{action('Auth\AuthController@getLogout')}}"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        @endif
        
      </ul>
    </div>
  </div>
</nav>
	@yield('content')

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>