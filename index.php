<?php
    include "Banco/conectaDB.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Traz Pra Mim</title>
	<link href="Style/styles.css" rel="stylesheet">
</head>
<body>
	<h2>Traz Pra Mim</h2>
	
	<form name="searchForm" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar"  method="post">
	
		<input class="button" name="Buscar" type="submit" value="Buscar" />
		<div class="input"><input name="buscar" type="text" placeholder="Insira sua cidade..." /></div>
		
	</form>
	
	
	<?php
       $buscar = $_POST['buscar'];
       $sql = mysqli_query($conection, "SELECT * FROM dados WHERE destino LIKE '".$buscar."' ");
       $row = mysqli_num_rows($sql);
       
       if($row > 0){
            while($linha = mysqli_fetch_array($sql)){
                $nome = $linha['nome'];
                $foto = $linha['foto'];
                $destino = $linha['destino'];
                $origem = $linha['origem'];
				echo '<img src="data:image/jpg;base64,' .base64_encode($foto) . '" />';
                echo "<br/> <br/>";
                echo "<strong>Nome: </strong>". @$nome;
                echo "<br/> <br/>";
                echo "<strong>Destino: </strong>". @$destino;
                echo "<br/> <br/>";
                echo "<strong>Origem: </strong>". @$origem;
                echo "<br/> <br/>";
            }
       }else{
            echo "Nenhum resultado foi encontrado!";
       }
    ?>
</body>
</html>