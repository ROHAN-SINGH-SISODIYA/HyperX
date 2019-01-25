<?php
    
   	$conn = mysqli_connect('localhost','root','','personal_info');
  
    $_POST = json_decode(file_get_contents('php://input'), true);

    $id = $_POST['id'];

    $query = "delete from information where id=$id";
    echo "$query";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_affected_rows($conn);

    echo $json_response = json_encode($rows);
?>