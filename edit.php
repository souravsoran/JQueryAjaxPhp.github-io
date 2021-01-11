<?php 

require('connection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata["id"];

$sql = "select * from jqueryajax_crud_app where id ={$id}";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    echo json_encode($row);

?>