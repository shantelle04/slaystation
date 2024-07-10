<?php 
include 'db_conn.php';
if(isset($_GET['deleteId'])){
$drugId=$_GET['deleteId'];
$delete="DELETE FROM drugs WHERE drugId=$drugId;";
$result=mysqli_query($conn, $delete);
if($result){
   header('location:pdrugs.php');
}

}

?>