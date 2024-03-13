<?php 
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into resistration(Username,Email,Password)
    values(?,?,?)");
    $stmt->bind_param("sss",$Username,$Email,$Password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>
