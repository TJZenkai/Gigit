<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gigit</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
  <!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_static_fixed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="/">
                <img id="logo" src="/images/trans-gigit-logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse nav-bkg" id="navbar_static_fixed">
            <ul class="nav navbar-nav navbar-right">

                <li>
                  <div class="form-group">
                    <input type="text" class="form-control pull-right nav-search" placeholder="Search Artists">
                  </div>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Add Artist</b> <span class="caret"></span></a>
          			<ul id="login-dp" class="dropdown-menu">
          				<li>
          					 <div class="row">
          							<div class="col-md-12">
          								 <form class="form" role="form" method="POST" action="http://gigit.local:8000/artist" accept-charset="UTF-8" id="login-nav">
                             <input name="_token" type="hidden" value="{!! csrf_token() !!}">
          										<div class="form-group">
          											 <input type="text" name="name" class="form-control" maxlength="30" placeholder="Artist Name" required>
          										</div>
          										<div class="form-group">
          											 <button type="submit" class="btn btn-primary btn-block">Add Artist</button>
          										</div>
          								 </form>
          							</div>
          					 </div>
          				</li>
          			</ul>
              </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End navbar -->

  @yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
