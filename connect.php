<?php>

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into emailsign(firstname, lastname,email)values(?,?,?)");
    $stmt->bindparam("sss",$firstname,$lastname,$email);
    $stmt->execute();
    echo "registration successful.....";
    $stmt->close();
    $conn->close();
}


?>


