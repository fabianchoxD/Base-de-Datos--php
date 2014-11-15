<?php 
			
if(!($conexion = mysql_connect('localhost',"fabian"))){
	exit();
}
else{

	mysql_select_db("practica",$conexion);
	$query= "select nombre from tabla1 where id = 1";

	$q = mysql_query($query,$conexion);

	$result = mysql_result($q,0);
	
	echo $result;

}

			
?>
