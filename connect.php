<?php
    $childname= $_POST['childname'];
    $childage= $_POST['childage'];
    $childLastvaccine= $_POST['childLastvaccine'];
    $childbirthplace= $_POST['childbirthplace'];
    $parentNumber= $_POST['parentNumber'];
    $parentEmail= $_POST['parentEmail'];
    $parentAddress= $_POST['parentAddress'];

    $conn = new mysqli('localhost' , 'root' , '' , 'test');
    if($conn->connect_error){
        die('Connection Failed:'.$conn->connection_error);
    }else{
        $stmt=$conn->prepare("insert into registration(childname,childage,childLastvaccine,childbirthplace,parentNumber,parentEmail,parentAddress)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sississ", $childname,$childage,$childLastvaccine,$childbirthplace,$parentNumber,$parentEmail,$parentAddress);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $stmt->close();

    }
?>

    
   