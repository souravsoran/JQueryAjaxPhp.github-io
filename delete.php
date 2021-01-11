<?php 

require('connection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata["id"];

if(!empty($id)){

    $sql = "delete from jqueryajax_crud_app where id = {$id}";

            if ($conn->query($sql) === TRUE) {
                echo "Delete Record Successfully";
            }else {
                echo "Unable to delete Record";
            }

}else{
    echo "All Fields are required";
}

?>