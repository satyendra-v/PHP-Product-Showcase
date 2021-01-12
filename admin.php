<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style type="text/css">

			nav{
				height:80px;
			}

			.image{
				border-radius: 50%;
				width: 50px;
				height: 50px;
			}

			.jumbotron{
				height: 200px;
			}

			.bgImage{
				position: absolute;
				width: 200px;
				left: 600px;
				top: 100px;
				border-radius: 50%;
			}
			.jumbotron{
				box-shadow: 22px 10px 20px rgba(0,0,0,0.5);
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <header> class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span classs="glyphicon glyphicon-menu-hamburger"></span>
		     	</button>
		      	<a class="navbar-brand" href="index.php"><img src="images/Amazon2.png" class="image" alt="Amazon"></a>
		    </header>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav lg-2">
			      	<li class="active"><a href="index.php">Home</a></li>
			    </ul>	
			    <div class="dropdown navbar-right">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <span class="glyphicon glyphicon-user"></span></button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Dashboard</a></li>
				    <li><a href="#">Edit Profile</a></li>
				    <li><a href="#">Logout</a></li>
				  </ul>
				</div>    
			</div>
		  </div>
		</nav>

		
		<div class="container">

			<div class="jumbotron">
				<!-- <h1 class="heading">amazon</h1> -->
				<img src="images/Amazonhead.jpg" class="bgImage">
			</div>

			<form action="insert.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Product Name</label>
					<input class="form-control" type="text" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input class="form-control" type="text" id="price" name="price" required>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<input class="form-control" type="text" id="description" name="description" required>
				</div>
				<div class="form-group">
					<label for="image">Upload Image</label>
					<input type="file" id="image" name="image" required>
				</div>
				<button class="btn btn-success" type="submit">Add Product</button>
			</form>
		</div>
	</body>
</html>