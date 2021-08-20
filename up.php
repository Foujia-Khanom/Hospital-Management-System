<html>
<head>
<center>
<h3>Update infrmation </h3>
</head>
<body>
<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_hms');
   //select
   $sql =  " select * from patient";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <table>
   <tr>
   
   <th>ID</th>
   <th>Name</th>
   <th>Contact</th>
   <th>Disease</th>

   </tr>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = update.php method=post>";
   echo"<td><input type = number name=ID value='".$row['ID']."'></td>";
   echo"<td><input type = text name=Name value='".$row['Name']."'></td>";
   echo"<td><input type = text name=Contact value='".$row['Contact']."'></td>";
   echo"<td><input type = text name=Disease value='".$row['Disease']."'></td>";
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created by Foujia Kjanom</p>
</div>
</center>
   </html>