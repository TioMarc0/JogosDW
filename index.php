<!DOCTYPE html>
<?php
 $dado = rand(1, 6);
 $dados = rand (1,6);
 


?>
<html lang="pt-BR">
<head>
<head>
<style type="text/css">
body {
margin:0;
padding:0;
background:#cccccc;
text-align:center; 
	}
 {
width: 760px;
margin:0 auto;			
padding: 10px;
text-align:left; 
	}
 {
padding: 5px;
background-color: #eeeeee;
	}
</style>
</head>
</head>

<body>
  <BR>
  Jogue dados contra a CPU
  <BR>
<?php include "menu.php";?>

<form action="" method="post">
    <input type="submit" value="jogar">
</form>
<?php

  echo "<img src='img/dados/$dado.png' alt=''>";
  if ($dado > $dados){
  echo 'player venceu';
  }elseif($dado == $dados){
    echo 'empate';
  }

?>
<br>
<?php?>
</form>
<?php
echo "<img src='img/dados/$dados.png' alt=''>";
if  ($dado < $dados){
    echo 'computador venceu';
    }elseif($dado == $dados){
        echo 'empate';
    }
?>
<br>

</body>
</html>
