<?php
      
         $conn = mysqli_connect('localhost','root','','personal_info');
         
         if(! $conn) 
         {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';


$_POST=json_decode(file_get_contents('php://input'),true);

$username1=$_POST['name1'];
$email1=$_POST['em1'];
$password1=$_POST['ps1'];
$gender1=$_POST['gn1'];


echo $qry="insert into information (fullname,email,password,gender) VALUES ('$username1','$email1', '$password1','$gender1')";
$con1=mysqli_query($conn,$qry);

$rows=mysqli_affected_rows($conn);
echo $json_response=json_encode($rows);
?>