<?php
include('config.php');
if(isset($_POST['update']) ) {
    $ID = $_POST['ID'];
    $NFT__name = $_POST['NFT__name'];
    $price= $_POST['price'];
    $NFT__description= $_POST['NFT__description'];
    $NFT__IMG = $_FILES['IMG'];
    $IMG_location = $_FILES['IMG']['tmp_name'];
    $IMG_name     = $_FILES['IMG']['name'];
    $IMG_up       = 'img/'.$IMG_name;
    $update = "UPDATE nft SET NFT__name='$NFT__name',price='$price',NFT__description='$NFT__description', NFT__IMG='$IMG_up' WHERE id=$ID ";
    mysqli_query($con, $update);
    if(move_uploaded_file($IMG_location,'img/'.$IMG_name)){
         echo "<script>alert('up date correct')</script>";
    }else{
          echo "<script>alert('things is wrong')</script>"; 
    }
    header('location: index.php');
}
?>