<?php 
include("conexion.php");
 


//se envia la consulta  
$result = mysqli_query($conexion,"SELECT * FROM productos");  
//se despliega el resultado 
echo "<table class='striped container'>";  
echo "<tr>";  
echo "<th>Nombre</th>";  
echo "<th>Descripción</th>";  
echo "<th>Precio</th>";
echo "<th>Categoría</th>";
echo "<th>Acción</th>"; 
echo "</tr>";  
while ($row = mysqli_fetch_row($result)){  
    echo "<tr>";  
    echo "<td>$row[1]
    	</td>";  
    echo "<td>$row[2]</td>";  
    echo "<td>$row[3] $</td>"; 
    echo "<td>$row[4]</td>";
    echo "<td><button>Comprar</button></td>";

    echo "</tr>";  
}
echo "</table>";  

 ?>