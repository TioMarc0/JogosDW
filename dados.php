<!DOCTYPE html>
<?php
 $dado = rand(1, 6);
 $dados = rand (1,6);
 $soma = $dado + $dados;
$total = $soma;

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> 
    <title>Dados</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    <input type="submit" value="jogarr">
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
