<?php 

require('connection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata["id"];
$name = $mydata["name"];
$email = $mydata["email"];
$phone = $mydata["phone"];
$password = $mydata["password"];

// ********************************Query for Only insert data*******

// if(!empty($name) && !empty($email) && !empty($phone) && !empty($password)){

//     $sql = "insert into jqueryajax_crud_app(username,email,phone,password)
//             values('$name','$email','$phone','$password')";

//             if ($conn->query($sql) === TRUE) {
//                 echo "New Record Inserted Successfully";
//             }else {
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             }

// }else{
//     echo "All Fields are required";
// }

// ############## Query for insert or update data ############

if(!empty($name) && !empty($email) && !empty($phone) && !empty($password)){

    $sql = "insert into jqueryajax_crud_app(id,username,email,phone,password)
            values('$id','$name','$email','$phone','$password') on duplicate key 
            update username = '$name', email = '$email', phone = '$phone', password = '$password'";

            if ($conn->query($sql) === TRUE) {
                echo "New Record Inserted Successfully";
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

}else{
    echo "All Fields are required";
}

?>