<?php



$id =$_GET['id'];
$db = new mysqli("localhost","root","","wdpf60_jquery");


$sql = $db->query("SELECT * FROM jquery WHERE id ='$id'");
$results = $sql->fetch_assoc();

echo $results['details'];



// $cities = array(
//     ""=> "Select one",
// 1=> "city of mosque",
// 2=>"Popular for river" ,
// 3=> "popular for rosmalai"
// );
// echo $cities[$id];


?>