<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "test1";
   $conn = new mysqli('localhost','root','','test1'); 
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $query ="SELECT * FROM users  ";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            echo "<tr></td>". $row["Username"] ."<tr></td>" ."<tr></td>". $row["Password"] ."<tr></td>";
        }
      
        echo "<?table>";
    
        echo "<?table>";
        exit();
        
    }else{
        header("Location:index.html");
        exit();
}
$conn->close();

?>
