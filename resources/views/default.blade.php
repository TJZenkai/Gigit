<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gigit</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
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
          								 <form id="addartist-nav" class="form" accept-charset="UTF-8">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
          										<div class="form-group">
          											 <input type="text" id="artist-name" name="artist_name" class="form-control" maxlength="30" placeholder="Artist Name" required>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.2.0/backbone-min.js"></script>
	<script src="js/csrf-token.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/models.js"></script>
	<script src="js/collections.js"></script>
	<script src="js/views.js"></script>
	<script src="js/router.js"></script>

	<script>
		new App.Router;
		Backbone.history.start();

		App.artists = new App.Collections.Artists;
		App.artists.fetch().then(function() {
			new App.Views.App({ collection: App.artists })
		});
		</script>

</body>
</html>
