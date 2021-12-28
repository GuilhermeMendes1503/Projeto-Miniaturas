# Projeto-Miniaturas
This is my first project connected with a database, and it was made while i was studing on ETEC, the project is about a fictional company that sells miniature cars. it was made using html, css and php.

# Seeing the project
the project can be seen by putting the main folder in the localhost and uploading the database. The connection string is on the connection.php and can be easily modified. to start the database use the file located on Projeto Miniaturas + Banco/Projeto Miniatura/bd and it should run all with no issues, if any changes are made on the tables you must change the new table name on the file with the query, 

## Exemple of query
in this case you will need to change the $query='select * from miniatura'; if you want to change the used table.

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
