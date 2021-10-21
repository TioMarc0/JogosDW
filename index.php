<!DOCTYPE html>
<?php
 $dado = rand(1, 6);
 $dados = rand (1,6);
 $soma = $dado + $dados;
$total = $soma;

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
<?php include "menu.php";?>

<form action="" method="post">
    <input type="submit" value="jogar">
</form>
<?php
$soma = $dado + $dados;
$total = $soma;
  echo "<img src='img/dados/$dado.png' alt=''>";
  if ($soma = $dado > $dados){
  echo 'player venceu';
  }elseif($dado == $dados){
    echo 'empate';
  }

?>
<br>
<?php?>
<form action="" method="post">
</form>
<?php
$soma = $dado + $dados;
$total = $soma;
echo "<img src='img/dados/$dados.png' alt=''>";
if  ($soma = $dado < $dados){
    echo 'computador venceu';
    }elseif($dado == $dados){
        echo 'empate';
    }
?>


</body>
</html>
