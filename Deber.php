<?php
echo '--------------------------------------------------------------------------------';

$datos1 = array('Carlos', 'Almeida', 32); 
$datos2 = array('Juan', 'Correa', 21); 
$datos3 = array('Maria', 'Martinez', 22); 

$contieneTODO = array($datos1, $datos2, $datos3);

echo '<table border = "1">';
echo '
		<tr>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>EDAD</th>
		</tr>
	'; 
foreach($contieneTODO as $key => $valores){
	echo '<tr>';
	foreach($valores as $NuevosVal){
		echo '<td>';
		print_r($NuevosVal);
		echo ' '; 
		echo '</td>';
	}
	echo '<br>';  
	echo '</tr>';
}

echo '</table>';

echo "--------------------------------------------------------------------------------";