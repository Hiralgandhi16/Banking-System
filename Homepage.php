<?php include 'dbcon.php'?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/home.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { 

	background: url('images/img4.jpg') no-repeat center center fixed;   
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%
  height: auto;
}
h1 {
	font-size: 52px;
	margin-top: -7px;
	margin-left: 940px;
}
h2{
	margin-left: 1100px;
	margin-top: 40px;
	font-size: 30px;
}
h4{
	font-size: 22px;
	margin-left: 940px;
	letter-spacing: 1px;
	
	text-shadow: 0px 1px;
}

</style>
</head>
<body>

<div class="header">
<br>
<h2 style="font-family:Lucida Calligraphy">Welcome To</h2>
<h1><strong>Spark Banking System</strong></h1>
<h4 style="font-family:MV Boli"><b>Select a customer and transfer the Money<br>&nbsp;from one customer to another customer.<b></h4>
<form action="users.php">
<button class='button1' >View Customer</button>
</form>

</div>
</body>
<div class="fixed-footer">


        <div class="container">Copyright &copy; 2021 Credit Management by Hiral Gandhi  

		</div>
    </div>

</html>
