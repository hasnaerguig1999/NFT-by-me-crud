<?php
include('config.php');
 $ID= $_GET['id'];
 mysqli_query($con, "DELETE FROM nft WHERE id=$ID");
 header('location: nft.php');
?>
