<?php 
require_once "db/connection.php";
if($_GET){
    if($_GET['action']=='kill'){
    $id=$_GET['id'];
    $sql = "DELETE FROM infopro WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>DELETED</script >";
    }
}   
}
header('location:components-carousel.php');


?>