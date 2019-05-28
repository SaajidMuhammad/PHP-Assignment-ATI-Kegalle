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
		<div id="content" class="bg-light" style="height:1250px;">
			<div class="list-group-item list-group-item-dark" style="border-radius:0px; height:60px;"><h4 style="font-weight:bold; text-align:center;">
			28. Modify above program to make a simple calculator </h4></div>
			
			<div style="background-color:#DCDCDC;height:1100px; width:480px; float:left; border:2px solid black; border-radius:3px; margin-top:40px; margin-left:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Input Code : </p> </h3>
				<div id="code_input"  style="margin:30px;">
					<pre>
&lt;form method="get">  
Number 1 : &lt;input type="number" name="num1">
Number 2 : &lt;input type="number" name="num2">  
&lt;button name="add"> + &lt;/button>
&lt;button name="sub"> - &lt;/button>
&lt;button name="mul"> * &lt;/button>
&lt;button name="div"> / &lt;/button>
&lt;button name="mod"> % &lt;/button>
&lt;/form> 

&lt;?php 
$total = 0;

if(isset($_GET['add'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
	$total = $num1 + $num2;
	}
elseif(isset($_GET['sub'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
	$total = $num1 - $num2;
	}
elseif(isset($_GET['mul'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
	$total = $num1 * $num2;
	}
elseif(isset($_GET['div'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
	$total = $num1 / $num2;
	}
elseif(isset($_GET['mod'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	
	$total = $num1 % $num2;
	}
?&gt;
Answer is : &lt;input value="&lt;?php echo $total;?>">
					</pre>
				</div>
			
			</div>
			<div style="background-color:#DCDCDC;height:1100px; width:480px; float:right; border:2px solid black; border-radius:3px; margin-top:40px; margin-right:45px;">
			<h3 style="background-color:black; height:40px; color:white;"> <p style="margin-left:20px"> Preview : </p> </h3>
				<div id="code_show6" style="margin:30px 30px 30px 0px; text-align : center;">
					
					<form method="get">
						Number 1 : <input type="text" name="num1"></br>
						Number 2 : <input type="text" name="num2"></br>
						<button name="add" class="btn-primary"> <i class="fas fa-plus"></i> </button>
						<button name="sub" class="btn-secondary"> <i class="fas fa-minus"></i> </button>
						<button name="mul" class="btn-danger"> <i class="fas fa-times"></i> </button>
						<button name="div" class="btn-dark"> <i class="fas fa-divide"></i> </button>
						<button name="mod" class="btn-warning"> <i class="fas fa-percentage"></i> </button>
					</form>
					
		
					<?php
					$total = 0;
					if(isset($_GET['add'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						
						$total = $num1 + $num2;
						}
					elseif(isset($_GET['sub'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						
						$total = $num1 - $num2;
						}
					elseif(isset($_GET['mul'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						
						$total = $num1 * $num2;
						}
					elseif(isset($_GET['div'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						
						$total = $num1 / $num2;
						}
					elseif(isset($_GET['mod'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						
						$total = $num1 % $num2;
						}
					?>
						Answer is : <input readonly="readonly" value="<?php echo $total;?>">
					
				</div>
			
			</div>
		</div>
		<footer style="height:100px;" class="bg-dark">
				<h6 style="color:white; padding-top:43px; text-align:center;">&copy; SAAJID MUHAMMAD | HNDIT | 2019 | SLIATE-KEGALLE<h6>
		</footer>
		
		
    </body>
	
</html>