<?php
	$link =mysql_connect("localhost","root","091212");
	if($link){
		mysql_select_db("tienda_leon",$link);
	}
?>