 <!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
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
			.heading{
				text-align: center;
				font-weight: bold;
			}
			li{
				top: 15px;
			}

			.product-image{
				width: 50rem;
				height: 50rem;
			}

			.jumbotron{
				box-shadow: 22px 10px 20px rgba(0,0,0,0.5);
				margin-top: 100px;
			}

			.thumbnail{
				box-shadow: 22px 10px 20px rgba(0,0,0,0.5);
				border-radius: 20px;
			}
			form{
				margin-top: 25px;
				margin-left: 100px;
			}

		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <header class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span classs="glyphicon glyphicon-menu-hamburger"></span>
		     	</button>
		      	<a class="navbar-brand" href="index.php"><img src="images/Amazon2.png" class="image" alt="Amazon"></a>
		    </header>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
			      	<li class="active"><a href="index.php">Home</a></li>
			      	<li class="active"><a href="admin.php">Admin</a></li>
			      	<li class="active"><a href="#">About</a></li>
			    </ul>
			    <ul class="nav navbar-nav">
				    <form class="form-inline my-2 my-lg-0">
				      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      	<a href="#" class="btn btn-default btn-md">
					  		<span class="glyphicon glyphicon-search"></span>
						</a>
				      	<!-- <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button> -->
				    </form>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			      	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
			</div>
		  </div>
		</nav>


		<div class="container">
			<div class="jumbotron">
				<h1>Products</h1>
			</div>

			<?php

				include('config.php');
				//SQL query 
				$sql = "SELECT * FROM products";

				$result = $conn->query($sql);//Execution

				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){	//Traversing Associative array			
						echo
						'<div class="col-md-3 col-sm-6	hero-feature">
							<div class="thumbnail">
								<img class="product-image" src="data:image/jpeg;base64, ' . base64_encode($row['image']) . '">
								<div class="caption">
									<h3>' . $row['name'] . '</h3>
									<p>' . $row['price'] . '</p>
									<p>
										<a href="#" class="btn btn-success">Buy Now!</a>
										<a href="#" class="btn btn-info">More Info!</a>
									</p>
								</div>
							</div>
						</div>';
						
					}
				}

			?>
		</div>
		<div class="container-fluid bg-2 text-center">
			<h3>Copy Rights &copy Satyendra Vasamsetti</h3>
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</div>
	</body>
</html>

<!-- <img src="data:image/jpeg;base64, ' . base64_encode($row['image']) . '"/>  -->