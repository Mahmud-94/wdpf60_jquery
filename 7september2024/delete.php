<?php 
$id = $_POST['id'];
include_once("dbconfig.php");

$del = $db->query("DELETE FROM students WHERE id ='$id'");

if($db->affected_rows){
    echo "Successfullly Deleted";
}else{
    echo "Delete Failed";
}

?>