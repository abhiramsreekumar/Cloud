<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->
<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo '
<html>
<head>
<meta http-equiv="refresh" content="0;url=./home.php#upl">
</head>
<body>
<script>
{
    alert("Sorry the file was not uploaded!");
}
</script>
</body>
</html>
';
		
	 } 
	 else
	 {
	 	echo '<script>window.location.replace("./index.html");</script>';
		
	 }
?>
