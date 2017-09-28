<?php
 mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
 mysql_select_db("emp")or die("no db");
 $q= mysql_query("UPDATE employees SET id = '1', password = 'one' WHERE id = '2' and password='345'");
 if($q)
	 echo "done";
?>