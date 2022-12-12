<?php
include('config.php');
if(isset($_POST['upload']) ) {
    $NFT__name = $_POST['NFT__name'];
    $price= $_POST['price'];
    $NFT__description= $_POST['NFT__description'];
    // $NFT__IMG = $_FILES['NFT__IMG'];
    $IMG_location = $_FILES['IMG']['tmp_name'];
    $IMG_name     = $_FILES['IMG']['name'];
    $IMG_up       = "img/".$IMG_name;
    $insert = "INSERT INTO nft ( NFT__name,price ,NFT__description, NFT__IMG) VALUES('$NFT__name','$price','$NFT__description','$IMG_up') ";
    mysqli_query($con, $insert);
    if(move_uploaded_file($IMG_location,'img/'.$IMG_name)){
         echo "<script>alert('upload correct')</script>";
    }else{
          echo "<script>alert('things is wrong')</script>"; 
    }
    header('location: index.php');
}
?>