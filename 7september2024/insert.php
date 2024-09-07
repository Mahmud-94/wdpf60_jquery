<?php 
$serializedData = $_POST['mydata'];
parse_str($serializedData, $data);

$name = $data['name'];
$gender= $data['gender'];
$dob= $data['dob'];
$email= $data['email'];
$phone = $data['phone'];
$address= $data['address'];

include_once("dbconfig.php");

$db->query("INSERT INTO students VALUES (NULL, '$name', '$gender', '$dob', '$email', '$phone', '$address')");


if($db->affected_rows){
    echo "Successfully Inserted";
}
// $k = $db->query("SELECT * FROM `students`");
?>

     

<!-- <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>

    
</table> -->