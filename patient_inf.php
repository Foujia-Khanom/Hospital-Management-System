
 <html lang="en">
<head>
<style>
body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
}

div#header, div#footer {
    padding: 20px;
    color: Purple;
    text-align:center;
    background-color: SkyBlue;
}

li {
     background-color:purple;
     float: left;
	
}

li a, .dropbtn {
    display: inline-block;
    color: White;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    background-color:  black;
}
div#patient{
	padding: 20px;
    color: Purple;
    text-align:center;
    background-color: LightBlue;
}


div.article {
    margin: 5px;
    padding: 10px;
    text-align:center;
    background-color: white;
}

</style>
</head>
<body>
<div class="flex-container">
<div id="header">
<h1>Dhaka Imperial Hospital Management System</h1>
</div>

<ul>
  
  
  
  <li class="dropdown">
    <a  href="patient_inf.php" class="dropbtn">View</a>
    <div class="dropdown-content">
     
      
    </div>
  </li>
   <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Result</a>
    <div class="dropdown-content">
    </div>
  </li>
</ul>
<article class="article">
<div class="flex-container">
<div id="patient">
<h1>Patient Information Data</h1>
 <?php
 
require_once "connect.php";

$sql = "SELECT * FROM patient ;";


$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>Patient Id</th><th>Patient Name</th><th>Disease</th><th>Contact";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>" . $row['ID'] . "</td>";
	echo "<td>" . $row['PatientName'] . "</td>";
    echo "<td>" . $row['Disease'] . "</td>";
    echo "<td>" . $row['Contact'] . "</td>";
	
	
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($con);
?> 
</div>



</article>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created by Foujia Kjanom</p>
</div>

</body>
</html>
 