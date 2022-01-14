<!DOCTYPE html>
<html>
<head>
	<title>TESTIII</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<h1 class="display-4">BGG boardgame tools</h1>

<div class="jumbotron">

	<div class="container">
		<p>View your own  boardgame collection</p>

		<form action="UserCollection.php" method="get">
			BGG username: <input type="text" name="name"><br>
			<input type="submit">
		</form>
	
	</div>
	
	<div class="container">
		<p>Find a new game from the TOP 100 boardgames list</p>
		
		<form action="TopGames.php" method="get">
			BGG username: <input type="text" name="name"><br>
			<input type="submit">
		</form>
	
	</div>
	
</div>	




<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Sono Ö</div>
  <!-- Copyright -->

</footer>

</body>
</html>