<?php 

$image = rand() % 9 + 1;

echo $image;




?>


<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style2.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Miniaturas do seu Jorge</title>
</head>
<body>
    <nav>
        <ul>
          <li><img src="img/logo.png" alt="logo" width="40px" heigth="40px"> Jorge Miniaturas</li>
          <li><a href="PgPrincipal.php">Home</a></li>
          <li><a href="preferences.php">Carros</a></li>
          <li><a href="Login.html">Login</a></li>
        </ul>
      </nav>
  
<div class="carossel">
  <div align="center">
    <section class="carousel">
      <input type="radio" name="carousel" id="carousel1" checked="checked" />
      <input type="radio" name="carousel" id="carousel2" />
      <input type="radio" name="carousel" id="carousel3" />
      <input type="radio" name="carousel" id="carousel4" />    
      <main class="carousel__stage">

        <aside class="carousel__item">
          <label for="carousel4" class="carousel__prev"></label>
          <img class="carousel__image" src="img_rand/img (<?php echo $image = rand(1, 3);?>).jpg" />
          <label for="carousel2" class="carousel__next"></label>
        </aside>

        <aside class="carousel__item">
          <label for="carousel1" class="carousel__prev"></label>
          <img class="carousel__image" src="img_rand/img (<?php echo $image = rand(4, 6);?>).jpg" />
          <label for="carousel3" class="carousel__next"></label>
        </aside>
        
        <aside class="carousel__item">
          <label for="carousel2" class="carousel__prev"></label>
          <img class="carousel__image" src="img_rand/img (<?php echo $image = rand(7, 9);?>).jpg" />
          <label for="carousel4" class="carousel__next"></label>
        </aside>  
        
        <aside class="carousel__item">
          <label for="carousel3" class="carousel__prev"></label>
          <img class="carousel__image" src="img_rand/img (<?php echo $image = rand(10, 11);?>).jpg" />
          <label for="carousel1" class="carousel__next"></label>
        </aside>
      </main>
    </section>  
  </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<div class="container">
    <h3 class="h3">shopping</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img_rand/img (<?php echo $image = rand(1, 3);?>).jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <span class="product-new-label">Jeep</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Jeep Renegate</a></h3>
                    <div class="price">$26.00
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                    <img class="pic-1" src="img_rand/img (<?php echo $image = rand(4, 6);?>).jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <span class="product-new-label">Ferrari</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ferrari Italia</a></h3>
                    <div class="price">$50.00
                        <span>$70.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                    <img class="pic-1" src="img_rand/img (<?php echo $image = rand(7, 9);?>).jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <span class="product-new-label">Ferrari</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ferrari California</a></h3>
                    <div class="price">$70.00
                        <span>$100.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                    <img class="pic-1" src="img_rand/img (<?php echo $image = rand(10, 11);?>).jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <span class="product-new-label">Ford</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ford Corcel</a></h3>
                    <div class="price">$40.00
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<p></p>
</body>
</html>