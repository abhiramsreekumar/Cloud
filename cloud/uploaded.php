<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->
<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo '
<html>
<head>
<meta http-equiv="refresh" content="0;url=./home.php">
</head>
<body>
<script>
{
    alert("The file was successfully uploaded to server!");
}
</script>
</body>
</html>
';
		
	 } 
	 else
	 {
	 	echo '<script>window.location.replace("./index.php");</script>';
		
	 }
?>
