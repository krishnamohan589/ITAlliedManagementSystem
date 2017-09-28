<html>
<head>
<style>
#pna 
{
    position:relative;
	top:0;
	left:-63;
}
#pnum
{
	position:relative;
    top:-20;
	left:-33;
} 
#pid
{
	position:relative;
    top:0;
	left:115;
} 
#pc
{
	position:relative;
    top:-20;
	left:-3;
} 

#pra
{
	position:relative;
    top:-20;
	left:-30;
} 
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
	<br><br><center><h2> MODIFY PRODUCT</h2></center>
	<br>
	<form method="post" action=" "> 
	<center>	<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div id="pnum"><label>Number:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp<input type="text" id="pid" name="pid" placeholder="Serial Number" maxlength="10" required></div>
	<br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label id="pra">New Product Number:</label>
	&nbsp<input type="text" id="pc" name="pc" placeholder="Enter New Serial Number" maxlength="10" required>
	<br><br><br><label id="pna">Product Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name="pro">
		<option value="cd">CD</option>
		<option value="books">Books</option>
		<option value="speakers">Speakers</option>
		<option value="scanners">Scanners</option>
		<option value="printers">Printers</option>
		<option value="laptops">Laptops</option>
		<option value="desktops">Desktops</option>
		<option value="monitors">Monitors</option>
		<option value="projectors">Projectors</option>
   </select>
  <br><br><br><br>
  <input type="submit" value="Modify Product" id="add" name="add">
 </center>
</form>
</body>

<script>
	$(document).bind("contextmenu",function(e)
	{
		e.preventDefault();
	});
</script>
   
</html>
   <?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("items")or die("no db");
 if(isset($_POST['add']))
 {
				$pro_name=$_POST['pro'];
				$pro_id=$_POST['pid'];
				$pro_count=$_POST['pc'];
				$q= mysql_query("UPDATE add_items SET serial_number='$pro_count' where serial_number='$pro_id' AND item_name='$pro_name'");
			         if($q)
					   {
							echo"Product Count Altered";
							header("Location :");
					   }
				     else
				       {
							echo"Item Not Issued";
    				   }    
 }
?>