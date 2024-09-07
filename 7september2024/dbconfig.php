<?php  
define("host", "localhost");
define("user", "root");
define("password", "");
define("database", "wdpf60_jquery");

$db = new mysqli();

$db->connect(host, user, password);

$db->select_db(database);

// $db = new mysqli("localhost","root","", "wdpf60_jquery");


if($db->connect_errno){
    echo $db->connect_error;
    exit();
}

echo $db->error;
?>