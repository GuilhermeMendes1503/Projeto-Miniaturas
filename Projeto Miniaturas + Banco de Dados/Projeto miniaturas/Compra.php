<?php
include_once('connection.php'); 
$id = $_GET['compid'];
echo $id;
$query = 'select * from miniatura where id = '.$id;
$result=mysqli_query($link, $query); 
?>






<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/Compra.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body> 
      
  <nav>
        <ul>
          <li><img src="img/logo.png" alt="logo" width="40px" heigth="40px"> Jorge Miniaturas</li>
          <li><a href="PgPrincipal.php">Home</a></li>
          <li><a href="preferences.php">Carros</a></li>
          <li><a href="Cadastro.html">Services</a></li>
        </ul>
      </nav>
<p></p>

<?php
    while($rows=mysqli_fetch_assoc($result)) 
    { 
    ?> 
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="1" src="<?php echo $rows['Cat_img'];?>" alt="">
        <img data-image="2" src="<?php echo $rows['cat_img2'];?>" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span><?php echo $rows['subcateg'];?></span>
          <h1><?php echo $rows['nome']; ?></h1>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Previas</span>

            <div class="color-choose">
              <div>
                <input data-image="1" type="button" id="red" name="color" style="background-image: url('<?php echo $rows['Cat_img'];?>'); " >
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="2" type="button" id="blue" name="color"style="background-image: url('<?php echo $rows['cat_img2'];?>');">
                <label for="blue"><span></span></label>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>R$:<?php echo $rows['preco'];?></span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>
    <?php 
    } 
?> 
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
