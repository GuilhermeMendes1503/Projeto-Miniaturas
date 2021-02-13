
<?php 
function Buscar()
{
    $mrk=$_GET['marca'];
    $mrk = "'$mrk'";
    $cate = $_GET['cat'];
    $cate = "'$cate'";
    $orde = $_GET['ordem'];
    $order = 'ORDER BY preco '.$orde;
    
    
    if($_GET['marca'] == 'Any' && $_GET['cat'] == 0)
    {
        $marca = '';
        $categ = ''; 
        $query='select * from miniatura '.$order;
    }
    elseif($_GET['marca'] != 'Any' && $_GET['cat'] == 0 )
    {
        $marca = 'where subcateg ='.$mrk;
        $categ = 'And id_categoria ='.$cate;   
        $query='select * from miniatura '.$marca.$order; 
    }
    elseif($_GET['marca'] != 'Any' && $_GET['cat'] >= 0 )
    {
        $marca = 'where subcateg ='.$mrk;
        $categ = 'And id_categoria ='.$cate;   
        $query='select * from miniatura '.$marca.$categ.$order; 
    }
    elseif($_GET['marca'] == 'Any' && $_GET['cat'] >= 0)
    {
        $categ = 'where id_categoria ='.$cate; 
        $query='select * from miniatura '.$categ.$order; 
    }
    
    
    $order = ' order by preco '.$_GET["ordem"];
    include_once('connection.php'); 
    $result=mysqli_query($link, $query); 

?>

<?php
    while($rows=mysqli_fetch_assoc($result)) 
    { 
    ?> 

<div class="container" value="">      
<div class="row" >
    <div class="col-md-4">
        <div class="product-grid">
            <div class="product-image">
                <a id="<?php echo $rows['id'];?>" onClick="">
                <form action="Compra.php" method="GET">
                <input type="hidden" name="compid" id="compid" value="<?php echo $rows['id']; ?>">
                <input type="submit" onclick="handleSubmit(this.id)" style="background-image: url('<?php echo $rows['Cat_img'];?>');" value="">
                </form>
                </a>
                <span class="product-new-label"><?php echo $rows['subcateg'];?></span>
            </div>
            <ul class="rating">
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star disable"></li>
            </ul>
            <div class="product-content">
                <h3 class="title"><?php echo $rows['nome']; ?></a></h3>
                <div class="price"><?php echo $rows['preco'];?>
                </div>
                <a class="add-to-cart" href="">Adicionar ao carrinho</a>
            </div>
        </div>
    </div>
    <?php 
    } 
}

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/Pesquisa.css">
    <script type="text/javascript" src="index.js"></script>
    <title>Miniaturas do seu Jorge</title>
</head>
<body>
    
    <nav>
        <ul>
          <li><img src="img/logo.png" alt="logo" width="40px" heigth="40px"> Jorge Miniaturas</li>
          <li><a href="PgPrincipal.php">Home</a></li>
          <li><a href="preferences.php">Carros</a></li>
          <li><a href="Cadastro.html">Cadastro</a></li>
        </ul>
      </nav>
<p></p>




<form action="preferences.php" method="get">
<div class="align">
<div class="pref">
    <label for="ordem">Ordenar por:</label>
    <select id="ordem" name="ordem">
      <option value="asc">Preço Crescente</option>
      <option value="desc">Preço Decrecente</option>
      <option value="asc">A -> Z</option>
      <option value="desc">Z -> A</option>
    </select>

    <label for="marca">Marca do Carro:</label>
    <select id="marca" name="marca">
      <option value="Any">Todos</option>
      <option value="BMW">BMW</option>
      <option value="ford">Ford</option>
      <option value="Chevrolet">Chevrolet</option>  
    </select>

    <label for="cat">Categoria:</label>
    <select id="cat" name="cat">
      <option value="0">Todos</option>
      <option value="1">Onibus</option>
      <option value="2">Carro</option>
      <option value="3">Moto</option>
      <option value="4">avião</option>
      <option value="5">Helicoptero</option>
      <option value="6">caminhão</option>
    </select>
    <input type="submit" name="buscar" class="button" value="Filtrar" /> 
    <form action="" method="post">
        <input type="search" name="" id="">
        <input type="button" value="">
    </form>

</div>
</div>
</form>


<br><br>

<?php 
if(array_key_exists('buscar', $_GET)) { 
    Buscar(); 
} 
?> 

<hr>
<p></p>
<p></p>
</body>
</html>

