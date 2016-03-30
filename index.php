<?php

session_start();

include('dbconnection.php');	

 if(isset($_POST['submit']))

{	

$_SESSION['name']=$_POST['name'];

$password=$_POST['password'];



$qry=mysql_query("select * from login");

if($q=mysql_fetch_array($qry))

{

	if($q[1]== $_SESSION['name'] && $q[2]== $password)

	{

		

		header('Location:sub.php');

	}

	else

	{

		echo "<script>alert('User Id or Password does not match !!');</script>";

	}

}	

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>guddubazar</title>

<link href="style.css" rel="stylesheet" />

</head>

<body style="background-color:#FFFFFF;">



<div style="width:1048px; height:120px; font-size:44px; color:#000000; margin:auto;">

   <p style="margin-top:60px; " ><center><b>Welcome To Guddubazar</b>	</center>  </p>

 </div>



<div style="width:1048px; height:500px; margin-top:0px; margin:auto;  ">

	<center><form action="index.php" method="post" name="form">

<table width="523" height="144" border="0" class="text" style="background-color:#99FF99; margin-top:100px;">

  <tr>

    <td width="158"><font color="#000000" size="+1" face="Times New Roman, Times, serif">Admin Name:</font></td>

    <td width="349"><input type="text" name="name" id="name"  style=" margin-left:70px;"></td>

  </tr>

  <tr>

    <td><font color="#000000" size="+1" face="Times New Roman, Times, serif"> Admin Password:</font></td>

    <td><input type="password" name="password" id="password" style=" margin-left:70px;"/></td>

  </tr>

  <tr>



    <td colspan="2" ><input type="submit" name="submit" id="submit" value="LOGIN" style=" margin-left:150px;background-color:#00CCCC; width:70px; height:30px border-radius:5px;"/></td>

	

	

  </tr>

</table>

</form>

</center>

 

</div>

</div>

</body>

</html>