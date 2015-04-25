<?php 
	function Conectarse(){
		mysql_connect('localhost','root','');
		mysql_select_db('clase3',$con);
	}
 ?>