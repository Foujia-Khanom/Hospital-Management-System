<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_hms');
   //update
   $sql =  " update patient set ID = '$_POST[ID]',Name = '$_POST[Name]',Contact = '$_POST[Contact]',Disease = '$_POST[Disease]' where ID = '$_POST[ID]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view.php");
   else
	   echo "Not update";
   ?>