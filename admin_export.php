<?php 

session_start();
require_once 'isAdmin.php';
require_once("security.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css" integrity="sha512-uj2QCZdpo8PSbRGL/g5mXek6HM/APd7k/B5Hx/rkVFPNOxAQMXD+t+bG4Zv8OAdUpydZTU3UHmyjjiHv2Ww0PA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/admin.css">
		<link rel="stylesheet" href="css/dashboard.css">
		<link rel="stylesheet" href="css/profile.css">
  </head>
  <body>

  <div class="wrapper d-flex">
			<nav id="sidebar" class="active">
				<div class="p-4">
		  		<h1><a href="admin.php" style="text-decoration: none; color: #fff;" class="logo">Admin Panel</a></h1>
	        <ul class="list-unstyled components mb-5">
				<li>
					<a href="admin_posts.php"><span class="fa-solid fa-rectangle-list my-3 me-2"></span>Posts List</a>
				</li>
				<li>
					<a href="admin_users.php"><span class="fa-solid fa-user-group my-3 me-2"></span>User Data</a>
				</li>
				<li>
					<a href="#"><span class="fa-solid fa-chart-bar my-3 me-2"></span>Export Statistic</a>
				</li>
			</ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Search User</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter any username">
	            </div>
	          </form>
			</div>
	      </div>
    	</nav>

    <main>
        <div>
            <h1 class="text-center">Export Statistics</h1>

</div>

    </body>
</html>