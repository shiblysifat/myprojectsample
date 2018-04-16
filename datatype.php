<!DOCTYPE html>
<html>
<head>
	<style>
		
		
		.header{
			font-family: arial;
			background-color:#ddd;	
			padding: 20px;
			margin-left: 200px;
			margin-right: 200px;

			

				}
			.maincontent{

				background-color: #eee;
				display: block;
				padding: 180px;
				text-align: center;
				margin-left: 200px;
				margin-right: 200px;
				

					
			}
			.footer{
				font-family: arial;
			background-color:#ddd;	
			padding: 25px;
			margin-left: 200px;
			margin-right: 200px;
			text-align: center;

			}
			.nav a  {
				padding: 65px;
				
				text-align: center;
				
			}
			.nav a ul {
				border-radius: 20px;
				margin: auto;
				padding: 20px;
			}

	</style>
</head>
<body>
	
	<section class="header">
		<ul class="nav">
			<a href="About">About</a>
			<a href="php">php</a>
			<a href="basic">Basic</a>
			<a href="practic">Practic</a>
			<button class="btn btn-primary" value="button" style="padding: 9px;">Login</button>
		</ul>
	</section>

	<section class="maincontent">


	<?php

		$hello="php data type";
		echo $hello."<br/>";






	?>


	




















	</section>

	<section class="footer">
		
		Copy & All Rights Reserved by Shible.
	
	</section>

</body>
</html>

