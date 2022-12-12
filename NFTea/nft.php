<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
   <style>
    .card{
      float:left;
      margin-top: 20px;
      margin-right:10px;
      margin-left:10px;
      border: 2px;
      border: #1F87CF;
      width: 10%;
      margin-top: 45px;
      padding: 10px ;
}
.card IMG{
  width:100%;
  height:200px;
}
main{
  width:60%;

}
   </style>
    <link rel="stylesheet" href="./css/index.css">
  </head>
<body>
   <center>
    <h3>All products available<h3>
</center>
  <?php
include('config.php');
 $result = mysqli_query($con,"SELECT * from nft");// give me  all  data de tbl
  while($row = mysqli_fetch_array($result)){
    echo "
          <center>
          <main>
            <div  class='card' style='width: 15rem;'>
                  <img src='$row[NFT__IMG]' width='50%'  class='card-img-top'>
                  <div class='card-body'>
                    <h5 class='card-title'>$row[NFT__name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <h4 class='card-title2'>$row[NFT__description]</h4>
                    <a href='delete.php? id=$row[ID]' class='btn btn-danger' >delete</a> 
                    <a href='update.php? id=$row[ID]' class='btn btn-primary'>upload</a>
                  </div>
            </div>
            </main>
          <center>
          ";
   }
    ?>
</body>
</html>