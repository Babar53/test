<?php
include "includes/connect.php";
// header('Content-Type: applicaion/json');
// header('Access-Control-Allow-Origin: '); 


$querry=mysqli_query($conn,"select * from students") or die(mysqli_error($conn));

if(mysqli_affected_rows($conn)>0){

 $output=mysqli_fetch_all($querry,MYSQLI_ASSOC);
 echo json_encode($output);
}else{

}

?>