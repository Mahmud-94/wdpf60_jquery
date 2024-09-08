<?php

include_once("dbconfig.php");

$sql = $db->query("SELECT * FROM students");

$table = "<hr><table border='1'><tr><th>ID</th><th>Name</th><th>Gender</th><th>Action</th></tr>";

while($row = $sql->fetch_assoc()){
    $table.= "<tr><td>" . $row['id'];
    $table.="</td><td>". $row['name'];
    $table.="</td><td>". $row['gender'];
    $table.="</td><td><a href='#' class='stid' value=". $row['id'].">Delete</a></td></tr>";
}

$table.= "</table>";

echo $table;
?>

<script>
    $(document).ready(function () {
        $(".stid").on('click', function(event){
            event.preventDefault();
            let sid = $(this).attr('value');
                // alert(sid);

                $.post("delete.php", {id:sid}, function(data, status){
                    alert(data + " from delete page");
                })
        })
    });
</script>