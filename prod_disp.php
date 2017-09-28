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
  </ul><br>
  <center><label>Type of Product:</label><select name="pro">
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
  <input type="submit" value="submit" name="submit">
 </center>
</form>
</body>
</html>