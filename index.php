<!doctype html>
<html lang="es">
  <head>
  <head>
	<title>Login Form</title>
	<style type="text/css">
		body {
			background-color: #32CD32; 
		}
		
		form {
			background-color: #FFFFFF;
			padding: 20px;
			border-radius: 10px;
			width: 300px;
			margin: auto;
			margin-top: 100px;
			text-align: center;
			box-shadow: 0px 0px 10px #888888; 
		}
		
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		button:hover {
			background-color: #45a049;
		}
		
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}
		
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}
		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}
		
		.container {
			padding: 16px;
		}
		
		span.psw {
			float: right;
			padding-top: 16px;
		}
		
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
		}
	</style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Poo</title>
  </head>
  <body>
	<form action="home.php" method="POST">
		<div class="imgcontainer">
			<img src="https://tinyurl.com/mr29fsk9" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="uname"><b>Nombre</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label for="psw"><b>Contrasenia</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<button type="submit">Login</button>
			<form action="./Estadio/home.php" method="POST">
			<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
			<form method="post" action="capacidad.php">
				<input type="submit" value="capacidad">
			</form>
			<div class="container" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
		</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>