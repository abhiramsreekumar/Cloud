<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi)-->

<?php session_start();
include("config.php");
if(isset($_POST['login']))
{
	$userName = secure($_POST['username'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM tbl_members WHERE username = '$userName' AND password = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['userName'] = $userName;
			header("Location:home.php");
			exit;
		}
		else
		{
			echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
			header("refresh:0;url=index.php" );
			exit;
		}
	}
}
?>