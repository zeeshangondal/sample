<?php
$email_address=$_POST['email_address'];
$email_password=$_POST['password'];
$name=$_POST['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'d');
$q="insert into email_info(email_address,email_password,name) values('$email_address','$email_password','$name');";
mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<title>ZEweb animation</title>
<Style>
h1
{
	color:blue;
	font-size:30px;
}
#n
{
		color:red;
	font-size:40px;
}
a
{
	color:blue;
}
</style>
</head>
<body style="background-color:black;">
<h1>Welcome <span id="n"><?php echo "$name"?><span><br><br><a href="animation.html">Click to access animation</a></h1>
</form>
</body>
</html>