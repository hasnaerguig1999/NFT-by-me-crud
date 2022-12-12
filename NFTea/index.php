<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT</title>
   
    <link rel="stylesheet" href="./css/index.css">
  </head>
<body>
   <center>
    
   
     <div class="main">
      <form action="insert.php" method="post" enctype="multipart/form-data">
         <h2> NFT SHOP</h2>
         <img src="./img/img1.jpg" alt="logo" width="100%" >
         <input type="text" name="NFT__name">
        <br>
        <input type="text" name='price'>
        <br>
        <input type="text" name='NFT__description'>
        <br>
        <!-- <input type="text" name='collection__ID'> -->
        <br>
        <input type="file" id="file" name='IMG' style='display:none;' >
        <label   for="file"> select a picture</label>
         <button name='upload'>Image loading</button>
          <br><br>
          <a href="nft.php">show all products</a>
      </form>
      </div>
      <p> Developer by hasnae</p>
    </center>
</body>
</html>