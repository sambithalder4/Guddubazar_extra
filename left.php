<div style="width:200px; height:auto; float:left; margin:auto;color:#271CFB; border:1px #CCCCCC solid;background-color:#33FFCC;">

<table >

 <tr><td>

 

 

 <a href="logout.php" style="text-decoration:none; color:#000000;">

 <b>Logout</b></a></td></tr>

 <tr><td><a href="changepassword.php" style="text-decoration:none; color:#000000;"><b>ChangePassword</b></a><hr /></td></tr></table>

 



<form action="left.php" method="post">

<b><font color="#000033">STATIC PAGE</font></b>

<table>

<?php 

include('dbconnection.php');

$nice=mysql_query("select * from static");

while($way=mysql_fetch_array($nice))

{

?>

<tr>

<td><a href="page.php?id=<?php echo $way['static_id'];?>" style="font-family:Tahoma, Geneva, sans-serif;text-decoration:none;color:#000000;" ><?php echo $way['page'];?></a></td>

</tr>

<?php 

}?>

</table>







</form>

<table style="border:0px solid #330033; margin-top:40px;">

         

<tr><td><a href="insert.php" style="text-decoration:none; font-size:20px;"><font color="#000033">Product</font></a></td></tr>

   </table>   



         

       

     

</div>