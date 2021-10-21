
<!DOCTYPE html>
<?php

$jokenpo = isset($_POST ['jokenpo']) ? $_POST ['jokenpo']:0 ;
$NPCJokenpo = rand (1,3);
$ganhou = "";


    
?> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <title>Jokenpo</title>
</head>
<style type="text/css">
body {
margin:0;
padding:0;
background:#cccccc;
text-align:center; 
	}
#tudo {
width: 760px;
margin:0 auto;			
padding: 10px;
text-align:left; 
	}
#conteudo {
padding: 5px;
background-color: #eeeeee;
	}
</style>
</head>
<body>
<?php include "menu.php"?> 
    <form action="submit" method="post">
    <input type="radio" name="jokenpo" value="1"/>pedra
     <input type="radio" name="jokenpo" value="2"/> papel
     <input type="radio" name="jokenpo" value="3"/>tesoura
     <input type="button" value="jogar!" />
                
     </form>
     
     <?php 
                  
echo "<img src='img\Jokenpo/$jokenpo.jpg' alt=''>";


     




?>

</form>
</body>
</html>