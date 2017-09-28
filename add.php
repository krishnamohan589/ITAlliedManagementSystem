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
#add
{
	top:15px;
	left:-10;
	font-family: "Open Sans", Helvetica, sans-serif;
	position: relative;
    width: 11%;
    height: 40px;
    display: block;
    opacity:0.87;
    color:black;
    background-color:Silver;
    border: none;
    -webkit-transition-duration: 0.4s; 
	border-radius:4px;
}
#add:hover 
{
	font-family: "Open Sans", Helvetica, sans-serif;
    background-color: LightSteelBlue;
	color: white;
}
</style>
</head>

<?php
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("items")or die("no db");
	   if(isset($_POST['add']))
		 {
				$serial_number=$_POST['serial_numb'];  
				$item_name=$_POST['item_nam']; 
					if(empty($serial_number && $item_name))
					  {
							echo("please enter Details!");
					  } 
					else
					  {
							$serial_number=$_POST['serial_numb'];  
							$item_name=$_POST['item_nam']; 
							$query = mysql_query("SELECT * from add_items WHERE serial_number='$serial_numb' && item_name='$item_name'");
							   if (mysql_num_rows($query) != 0)
								 {
									    echo"You Have Already Added";
								 }
							   else
								 {
									   $query="insert into add_items(serial_number,item_name) values('$serial_number','$item_name')";
										  if(mysql_query($query))
											{
													echo"Successfully Added";
											}
										  else
											{
													echo"Addition UnSuccessfull";
											}  
								 }
					 }
	    }
  ?>
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
	</ul>	<br><br>
	<center><h2> ADD PRODUCT</h2></center>
	<br><br>
	<form method="post" action=""> 
	<center>
	<label>Serial Number:</label>
	<input type="text" id="serial_numb"name="serial_numb" placeholder="Serial Number" maxlength="10" required>
	&nbsp&nbsp&nbsp&nbsp
	<label>Item Name:</label>
	<input type="text" id="item_nam" name="item_nam" placeholder="Item Name" maxlength="10" required>
	<br><br>	<br>
	<input type="submit" value="Add" id="add" name="add">&nbsp&nbsp
   </center> 
  </form>
 </body>
</html>
   