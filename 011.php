<!DOCTYPE html>

<html>
    <head>
        <title>Assignment | Web Development | Saajid Muhammad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
		
		<script type="text/javascript" src="js/fontawesome.min.js"></script>
		
		
    </head>
    <body  class="container" style="background-color:#C0C0C0;">
       <nav class="navbar navbar-expand-sm bg-dark">
			<a href="index.php" class="btn btn-primary btn-sm" role="button" style="font-weight:bold; width:40px;"><i class="fas fa-home"></i></a>
		</nav>
		<div id="content" class="bg-light" style="height:600px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">11. Write a program to keep student names of ten students (Hint: Use Arrays)  </h4></div>
			
			<div style="background-color:#DCDCDC;height:450px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;?php 
$names=array("Aadhil","Faros","Fasly",
	     "Muneef","Nawshad","Nusky",
	     "Naazim","Ijaz","Azmar","Asran");
			
	echo $names[0],"&lt;/br>";
	echo $names[1],"&lt;/br>";
	echo $names[2],"&lt;/br>";
	echo $names[3],"&lt;/br>";
	echo $names[4],"&lt;/br>";
	echo $names[5],"&lt;/br>";
	echo $names[7],"&lt;/br>";
	echo $names[8],"&lt;/br>";
	echo $names[9],"&lt;/br>";
?&gt;
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:450px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show" style="margin:30px 30px 30px 170px;">
					
					<?php

					$names=array("Aadhil","Faros","Fasly","Muneef","Nawshad","Nusky","Naazim","Ijaz","Azmar","Asran");
			
					echo $names[0],"</br>";
					echo $names[1],"</br>";
					echo $names[2],"</br>";
					echo $names[3],"</br>";
					echo $names[4],"</br>";
					echo $names[5],"</br>";
					echo $names[7],"</br>";
					echo $names[8],"</br>";
					echo $names[9],"</br>";

					?>
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>