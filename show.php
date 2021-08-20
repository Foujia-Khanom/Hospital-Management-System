<html>
<head>
<center>
<h1>Dhaka Imperial Hospital </h1>
</head>
<body>
 <head>   
        <style>
            {
                margin: 0%;
                padding: 0%;
                font-family: Arial, Helvetica, sans-serif;
            }
            body
                {
                    background-image: url(image/bb.jpg);
                    background-position: center;
                    background-size: cover;
                    background-attachment: scroll;
                    height: 100vh;
                }
            
			div#header,  div#footer 
			{
				padding: 20px;
				color: skyblue;
				text-align:center;
				background-color:white;
			}


            .title h1
                {
                    padding-left: 32%;
                    padding-top: 00%;
                    font-size: 3.5em;
                    color: white;
                    backgroud-color:white;					
                }
            
            .button2 a
                {
                    position: absolute;
                    top: 60%;
                    left: 48%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button2 a:hover
                {
                    background-color: black;
                    color: yellow;
                } 
          .button3 a
                {
                    position: absolute;
                    top: 60%;
                    left: 38%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
            .button3 a:hover
                {
                    background-color: black;
                    color: yellow;
                }
.button5 a
                {
                    position: absolute;
                    top: 60%;
                    left: 26%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button5 a:hover
                {
                    background-color: black;
                    color: yellow;
                }    
				.button6 a
                {
                    position: absolute;
                    top: 60%;
                    left: 15%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button6 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
             .button7 a
                {
                    position: absolute;
                    top: 60%;
                    left: 5%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button7 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
             
        </style>
    </head>
 <div class="button2">
            <a href="view.php">View</a>
        </div>
        <div class="button3">
            <a href="search.php">Search</a>
        </div>
        
		<div class="button5">
            <a href="Report.php">Report</a>
			        </div>
					<div class="button6">
            <a href="form.php">Insert</a>
			        </div>
					<div class="button7">
            <a href="home.php">Home</a>
			        </div>
<h5>
<table border= 1 cellpadding =1 cellspacing =1>
   <tr>
   
   <th>Name</th>
   <th>ID</th>
   <th>Disease</th>
   <th>Contact</th>
   <th>Delete</th>
   <th>Update</th>
   </tr>
   
   <?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_hms');
   //select
   $sql =  " select * from patient ";
   //execute
   $records=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($records))
   {
   echo"<tr>";
   echo"<td>".$row['Name']."</td>";
    echo"<td>".$row['ID']."</td>";
	 echo"<td>".$row['Contact']."</td>";
	  echo"<td>".$row['Disease']."</td>";
	  
	 echo "<td><a href=delete.php?ID=".$row['ID'].">Delete</a></td>";
	  echo "<td><a href=up.php?ID=".$row['ID'].">Update</a></td>";
   }
   ?>
   </table>
   </center>
   </h5>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created by Foujia Kjanom</p>
</div>
</html>
