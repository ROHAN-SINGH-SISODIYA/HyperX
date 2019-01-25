<?php

    $conn = mysqli_connect('localhost','root','','personal_info');
	
    $_POST = json_decode(file_get_contents('php://input'), true);

    
        $id = $_POST['id'];

   
        $name = $_POST['name1'];
  

        $email = $_POST['em1'];

    
        $password = $_POST['ps1'];

         $gen = $_POST['gn1'];

    $query = "update information set fullname='$name', email='$email', password='$password',gender='$gen' where id=$id";

    $result = mysqli_query($conn,$query);
    $rows = mysqli_affected_rows($conn);

    echo $json_response = json_encode($rows);
?>