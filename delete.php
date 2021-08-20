<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //databas
   mysqli_select_db($con,'db_hms');
   //select
   $sql =  " delete from patient where ID='$_GET[ID]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view.php");
   else
	   echo "Not deleted";
   ?>