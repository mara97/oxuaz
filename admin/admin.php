
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

	<link rel="stylesheet" href="../assets/css/style.css" type="style/css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
</head>
<body>

	<div class="navbar-fixed">

		<nav >
			<div class="nav-wrapper container width">
				<a href="#!" class=" brand-logo">OXU.AZ</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Home</a></li>
					<li><a href="badges.html">About</a></li>
					<li><a href="badges.html">Contact</a></li>
					<li><a href="sass.html">Registration</a></li>
					<li><a href="badges.html">Login</a></li>
				</ul>

				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Home</a></li>
					<li><a href="badges.html">About</a></li>
					<li><a href="badges.html">Contact</a></li>
					<li><a href="sass.html">Registration</a></li>
					<li><a href="badges.html">Login</a></li>
				</ul>

			</div>
		</nav>
	</div>
	<div class="tab-content" style="border: 1px solid #ddd">
		<div id="home" class="tab-pane fade in active">

			<div class="container">
				<div class="row"><a class="btn btn-primary pull-right" href="../app/addNews.php"><span class="glyphicon glyphicon-plus"></span>Add News</a></div>
				<h3>NEWS</h3>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>News Name</th>
							<th>News date</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>News title</td>
							<td>12/12/12</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>News title</td>
							<td>12/12/12</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>News title</td>
							<td>12/12/12</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<div id="menu1" class="tab-pane fade">
			<div class="container">
				<h3>USERS LIST</h3>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Email</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Name</td>
							<td>Surname</td>
							<td>example@example.com</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Name</td>
							<td>Surname</td>
							<td>example@example.com</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Name</td>
							<td>Surname</td>
							<td>example@example.com</td>
							<td><a class="btn btn-warning" href="#">Delete</a></td>
							<td><a class="btn btn-primary" href="#">Edit</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div id="menu2" class="tab-pane fade">
			<h3>ABOUT PAGE</h3>
			<p>Some content in menu 2.</p>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(".button-collapse").sideNav();
	</script>
</body>

</html>