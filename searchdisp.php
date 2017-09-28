<html>
<head>
<style> 
body
{
   background-color:aquablue;
}
.main
{
   display:flex;
}
.main h2
{
   margin-left:100px;
}
.nav
{
	display:flex;
	justify-content:space-between;
	background-color:grey;
	height:45px;
}
.nav li
{
	padding-top:14px;
	flex:2;
	list-style:none;
	text-align:center;
}
.nav li:hover
{
	background-color:goldenrod;
}
.nav li a
{
	color:white;
	text-decoration:none;
}
h1
{
	color:DarkSlateBlue;
	text-align:center;
}
.dropbtn
 {
    background-color: grey;
    color: white;
    padding: 13px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown 
{
    position: relative;
    display: inline-block;
}
.dropdown-content
{
    display: none;
    position: absolute;
    background-color:grey;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a 
{
    color:white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: goldenrod}
.dropdown:hover .dropdown-content 
{
    display: block;
}
.dropdown:hover .dropbtn 
{
    background-color: goldenrod;
}
label
{
	font-size:23px;
}
input
{
	padding:4;
	align:center;
	font-size:16px;
}
label
{
	font-size: 25px;
}
option
{
	font-size: 15px;
}
select
{
	font-size: 18px;
	width:200px;
}
table
{
	align:center;
	color:Crimson ;
	padding:10;
	font-size:20px;
	font-weight:bold;
}
.button 
{
    background-color:black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    position:relative;
    top:202;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
 }
</style>
</head>
<body>
<div class="main">
<img src="hp.png" width="100" height="100" >
<h1><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIT ALLIED ITEMS MANAGEMENT SYSTEM</center></h1>
</div>
   <ul class="nav">
	  <div class="dropdown">
		<li class="dropbtn">Manipulate Products</li>
		  <div class="dropdown-content">
			<a href="add.php">Add</a>
			<a href="modify.php">Modify</a>
			<a href="delete.php">Delete</a>
		  </div>
	  </div>
    <li><a href="viewprod.php">View Products</a></li>
	<li><a href="enter.php">Issue Product</a></li>
	<li><a href="search.php">Search Products Issued</a></li>
	<li><a href="remainderform.php">Reports</a></li>
  </ul>
  <br>
</form>
</body>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("items")or die("no db");
$product_name=$_POST['pro']; 
$product_id=$_POST['serial_numb']; 
$result = mysql_query("SELECT * FROM products where product_name='$product_name' && product_id='$product_id'");
echo "<table border='1'>
<tr>
<th>Product Name</th>
<th>Product ID</th>
<th>Employee Name ID</th>
<th>Employee ID</th>
<th>Department</th>
<th>Date Of Issue</th>
<th>Date To Be Returned</th>
</tr>";
    while($row = mysql_fetch_array($result))
	 {
		echo "<tr>";
		echo "<td>" . $row['product_name'] . "</td>";
		echo "<td>" . $row['product_id'] . "</td>";
		echo "<td>" . $row['emp_name'] . "</td>";
		echo "<td>" . $row['emp_id'] . "</td>";
		echo "<td>" . $row['dept'] . "</td>";
		echo "<td>" . $row['from_date'] . "</td>";
		echo "<td>" . $row['to_date'] . "</td>";
		echo "</tr>";
	 }
echo "</table>";
?>

</html>
   