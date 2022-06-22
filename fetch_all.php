<?php
include "includes/connect.php";
// header('Content-Type: applicaion/json');
// header('Access-Control-Allow-Origin:*'); 
$data= json_decode(file_get_contents("php://input"),true);
$id = $data['sid'];

$querry=mysqli_query($conn,"select * from students where id=$id") or die(mysqli_error($conn));

if(mysqli_affected_rows($conn)>0){

 $output=mysqli_fetch_all($querry,MYSQLI_ASSOC);
 echo json_encode($output);
}else{
echo json_encode(array('message'=> 'no record found.', 'status' => false));
}

?>
