<?php
$conn = mysqli_connect('localhost','root','','personal_info');

$query = "select *from information order by id DESC";
$result = mysqli_query($conn, $query);
$arr = array();


if(mysqli_num_rows($result) != 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
     $arr[] = $row;
  }
}
echo $json_info = json_encode($arr);
?>