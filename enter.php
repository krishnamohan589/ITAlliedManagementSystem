<html>
<head>
<style>
h1
{
	position:relative;
	top:15;
}
h2
{
	position:relative;
	top:42;
}
#imgso
{
	position:relative;
	top:-425;
	left:1170;
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
	font-size:18spx;
	display:block;
}
h1,h2
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
.dropdown-content a:hover 
{
	background-color: goldenrod;
}
.dropdown:hover .dropdown-content
{
    display: block;
}
.dropdown:hover .dropbtn
{
    background-color: goldenrod;
}
table
{
	align:center;
	color:Crimson ;
	padding:10;
	font-size:20px;
	font-weight:bold;
}
#is
{
	top:100px;
	left:-380.5;
	font-family: "Open Sans", Helvetica, sans-serif;
	position: relative;
    width: 50%;
    height: 40px;
    display: block;
    opacity:0.87;
    color:black;
    background-color:Silver;
    border: none;
    -webkit-transition-duration: 0.4s; 
	border-radius:4px;
}
#is:hover 
{
	font-family: "Open Sans", Helvetica, sans-serif;
    background-color: LightSteelBlue;
	color: white;
}	
#pnl
{ 
    position:relative;
    left: -110;
    top: 75; 
    font-family: "Open Sans", Helvetica, sans-serif;
}
#c
{ 	
	background-color:WhiteSmoke;
}
#co
{
	position:relative;
	top:9px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#do
{
	position:relative;
	top:50px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#eo
{
	position:relative;
	top:9.5px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#fo
{
	position:relative;
	top:9px;
	left:10;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#go
{
	position:relative;
	top:10px;
	left:11;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#dmt
{
	position:relative;
	top:5px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#dgn
{
	position:relative;
	top:5px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#lv
{
	position:relative;
	top:5px;left:-20;
	font-family: "Open Sans", Helvetica, sans-serif;
}

#cld
{
   position:relative;
   left: 15;
   top:5;
}
#cld2
{	
   position:relative;
   left: 15;
   top:45;
}
#pbd
{
   position:relative;
   height:380;
}
.caret-up
{
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
	display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
#eo
{
   position:relative;
   left:490;
   top: -125.5; 
}
#eeo
{
   position:relative;
   left: 200;
   top: -125; 
}
#fo
{
   position:relative;
   left: -520;
   top: -50.5; 
}
#ffo
{
   position:relative;
   left: -473;
   top: -75; 
}
#mv
{
   position:relative;
   left: 170;
   top: 100; 
}
#nv
{
   position:relative;
   left: 170;
   top: -60; 
}
#form-emil
{
   position:relative;
   left: 0;
   top: -30; 
}
#form-nber
{
   position:relative;
   left: 0;
   top: -20; 
}
#sn
{
   position:relative;
   left:490;
   top: 30; 
}
#prod
{
	
   position:relative;
   left:490;
   top:-20; 
}
#mv
{
   position:relative;
   left:-30;
   top:-130; 
}
#nv
{
   position:relative;
   left:-368;
   top:-105; 
}
#uname
{
   position:relative;
   left:80;
   top:75; 
}
#d1
{
   position:relative;
   left:155;
   top:-40; 
}
#d2
{
   position:relative;
   left:-180;
   top:30; 
}
#dlv
{
   position:relative;
   left:493;
   top:-110; 
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).bind("contextmenu",function(e)
	{
		e.preventDefault();
	});
</script>

<?php
mysql_connect("localhost","root","root")or die("unconnected");
//mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
			 if(isset($_POST['is']))
			 {
				$id=$_POST['prod'];
				$name=$_POST['sn'];
				$department=$_POST['uid'];
				$designation=$_POST['uname'];
				$dlv=$_POST['dlv'];
				$date1=$_POST['d1'];
				$date2=$_POST['d2'];
			    $query="insert into products values('$department','$designation','$id','$name','$dlv',$date1','$date2')";
			         if(mysql_query($query))
					  {
									echo"Item Issued";
					  }
				     else
					  {
								    echo"Item Not Issued";
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
</ul>
<h2><center>ISSUE PRODUCT<center></h2>
<br><br>
	<form role="form" action="" method="post" class="login-form">
				<div class="form-group col-sm-3">
				&nbsp&nbsp<input type="text" id="sn" name="sn" placeholder="Enter Name of the Employee " class="form-username form-control">
	            </div><br><br><br><br><br><br>
				<div class="form-group col-sm-3">
	            &nbsp&nbsp<input type="text" id="prod" name="prod" placeholder="Enter Employee ID" class="form-username form-control">
	            </div><br><br><br><br><br><br><br><br><br><br>
				<div class="form-group">
                   <label id="eo" class="col-sm-3 control-label">Select </label>
				   <label id="eeo" class="col-sm-3 control-label">Department</label>
                      <div id="mv" class="col-sm-3">
                           <select  name="uid" class="form-control">
							   <option  value="CIS(Cloued and infrastructure unit)">CIS(Cloued and infrastructure unit)</option>
							   <option  value="IVS (Testing related projects)">IVS(Testing related projects)</option>
							   <option value="DNA(Data Analysis Related Projects)">DNA(Data Analysis Related Projects)</option>
							   <option value="HR">Human Resources</option>
							   <option value="Training">Training</option>
							   <option  value="Finance">Finance</option>
							   <option value="Facilities">Facilities</option>
							   <option value="Engineering ">Engineering</option>
							   <option value="R&D">Research and Development</option>
						   </select><br>
                      </div>
					  <div class="form-group">
                         <label id="fo" class="col-sm-3 control-label">Select </label>
					     <label id="ffo" class="col-sm-3 control-label"> Product</label>
                           <div id="nv" class="col-sm-3">
                              <select  name="uname" class="form-control">
							    <option value="cd">CD</option>
								<option value="books">Books</option>
								<option value="speakers">Speakers</option>
								<option value="scanners">Scanners</option>
								<option value="printers">Printers</option>
								<option value="laptops">Laptops</option>
								<option value="desktops">Desktops</option>
								<option value="monitors">Monitors</option>
								<option value="projectors">Projectors</option>
						      </select><br><br>
							</div><br>
							<div class="form-group col-sm-3">
								<input type="text" id="dlv" name="dlv" placeholder="Product ID" class="form-username form-control" id="form-username">
							</div><br>
							<div class="form-group col-sm-3">
								<input type="text" id="d1" name="d1" placeholder="From" class="form-username form-control" id="form-username">
							</div><br>
							<div class="form-group col-sm-3">
								<input type="text" id="d2" name="d2" placeholder="To" class="form-password form-control" id="form-password">
							</div><br>
							<div class="col-sm-3">
								<button type="submit" class="btn" id="is" name="is">Issue Item</button>
							</div>
			   </div>
          </form>
	</body>
</html>
   