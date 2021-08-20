<?php  ?>
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
                    left: 58%;
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
           
          .button4 a
                {
                    position: absolute;
                    top: 60%;
                    left: 42%;
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
           .button4 a:hover
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
        
        <div class="button4">
            <a href="show.php">Delete/Update</a>
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

<center>
<form method="POST" style="text-align:center">

<h3 style="font-size:150%;">Search Form</h3>
<h4 style="font-size:120%;"> Search By ID:</h4>
<input type="text" style="font-size:100%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<article class="article">
<div class="table"><div id="printableArea">
  <table border="1" align="center">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hms";
$ID="";
if(isset($_POST["search_id"])){
$ID=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Name , Contact , Disease FROM patient where ID='$ID'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  


  echo "<tr><th><center>Name</th><th>Id</th><th>Contact</th><th>Disease</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["Name"]."</td><td>". $row["ID"]. "</td><td>". $row["Contact"]."</td><td>" . $row["Disease"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}

mysqli_close($conn);
?> 
</div>
<br>

<script>


}</script>


</div>


</center>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created by Foujia Kjanom</p>
</div>
<?php  ?>
<style>
body {
  background-image: url('pic5.jpg');
   background-size: cover;

  
}
</st
