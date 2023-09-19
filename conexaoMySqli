<?php
$mysqli_connection = new MySQLi('localhost', 'root', '');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
$result = $mysqli_connection->query("show databases");
var_dump($result);
echo "<br><br><table border=\"2\"><tr><th>Database</th></tr>";
foreach ($result as $row){
    echo "<tr><td>".$row["Database"]."</td></tr>";
}
echo "</table>";
?>
