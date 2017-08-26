<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->


<?php session_start();
if(isset($_SESSION['userName']))
	 {
  echo '<script>window.location.replace("./home.php");</script>';

          }
          else
	  {
            }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>SASI-Cloud</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ribbon Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
<h1>Welcome!<span>Please login...</span></h1>
<div class="login-box">
		<form action="login.php" method="post">
			<input type="text" class="text" name="username"  value="Username" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required>
			<input type="password" name="password"  value="Password" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
		
		<div class="remember">
			
			<h4><a href="https://i.vimeocdn.com/video/452859173_1280x960.jpg">Forgot your password?</a></h4>
		</div>
		<div class="clear"> </div>
		<div class="btn">
			<input type="submit" name="login" value="LOG IN" >
			</form>
		</div>
		<div class="clear"> </div>
</div>



</body>
</html>