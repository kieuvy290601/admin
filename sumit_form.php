<?php
$host_heroku = "ec2-52-86-25-51.compute-1.amazonaws.com";
$db_heroku = "dcnnn5f87r5pst";
$user_heroku = "nlcmibxyahfytv";
$pw_heroku =
"df1ff1c44e44f986fd52f17f3da8346a956efc0d65553c3b187d88514683d65e";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
?>
<?php
$link=$_REQUEST['success'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("success").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="success" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
</form>

<h1 style="padding-left:400px; padding-top:200px;"><img src="../images/loading-x.gif" /></h1>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>