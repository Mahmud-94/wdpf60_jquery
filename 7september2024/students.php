<?php

include_once("dbconfig.php");

$sql = $db->query("SELECT * FROM students");

$table = "<hr><table border='1'><tr><th>ID</th><th>Name</th><th>Gender</th></tr>";

while($row = $sql->fetch_assoc()){
    $table.= "<tr><td>" . $row['id'];
    $table.="</td><td>". $row['name'];
    $table.="</td><td>". $row['gender']."</td></tr>";
}

$table.= "</table>";

echo $table;




?>