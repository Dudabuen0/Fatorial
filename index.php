<html>
 <head>
  <title>Apostila PHP Progressivo</title>
  <link rel='stylesheet' href='style.css'>
 </head>
 <body>
    <h1>Fatorial e computação</h1>
    <p>Um programa de computador nada mais é do que a implementação de
um algoritmo que pode ser executada pelo computador. Em outras palavras, um programa é um algoritmo convertido em uma linguagem que o
computador possa compreender. Para solucionar um problema através do
uso de programas de computador.</p>
 <form action="" method="get">
 Digite um número inteiro para calcular seu Fatorial: <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php
echo "Calculadora Fatorial: ";
$n=$_GET['number'];
  $fatorial=1;
  
  for($count=1; $count<=$n ; $count++)
   $fatorial *= $count;
   
  echo $fatorial;
  ?>
 </body>
</html>