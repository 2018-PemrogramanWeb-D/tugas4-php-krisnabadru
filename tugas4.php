<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<?php
if($_POST["name"]=="krisna")
{

	if( $_POST["password"]=="keren")
	{
		$_SESSION["loginstatus"]=1;
	}
	else
	{
		$_SESSION["loginstatus"]=0;
		header ("Location: tugas4.html");
		
	}
}
else 
{
	$_SESSION["loginstatus"]=0;
	header ("Location: tugas4.html");
	
}
?>


<?php 
if("0"<=date("H")&&date("H")<"12")
{echo "Selamat Pagi ";}
else if("12"<=date("H")&&date("H")<"15")
{echo "Selamat Siang "; }
else if("15"<=date("H")&&date("H")<"18")
{echo "Selamat Sore ";}
else 
{echo "Selamat Malam ";}
 ?>
 <?php echo $_POST["name"];?><br>
 <?php echo "Waktu saat ini adalah ".date("h:i:s a");?><br>
<a href="tugas4.html">Kembali ke halaman login screen</a><br>
</body>
</html>