<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="{{url('acceuil')}}">acceuil <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="{{url('service')}}">service</a>
	      <a class="nav-item nav-link" href="{{url('contact')}}">contact</a>
	     
	    </div>
	  </div>
	</nav>
@yield('content')


	
	

<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.js')}}"></script>
</body>
</html>