<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<div style='float:right'>
  <IMG
    SRC="../../img/iWaifus/Fabiana_001.png"
    alt="Fabiana">
</div>

<h2>
  <?php
  /*
  1 A imobiliária Imóbilis vende apenas terrenos retangulares. Faça um programa em
    PHP que atribua as dimensões de um terreno, calcule e depois exiba a área do terreno.
  */

  print "\u{1F30E} 1) A imobiliária Imóbilis vende apenas terrenos retangulares. \n";

  echo "<br>";

  print "Faça um programa em PHP que atribua as dimensões de um terreno, \n";

  echo "<br>";

  print "calcule e depois exiba a área do terreno. \n";

  echo "<br>";

  echo "<br>";
/*
  function retangulares($base, $altura)
  {
    return $base * $altura;
  }
*/
  ///echo "\u{1F30E} A área do terreno é: \n";

  $base = 5;

  $altura = 10;

  echo "\u{1F30E}  Com Base de: $base e Altura de: $altura. A área do terreno é de: \n",
    $base * $altura . PHP_EOL; /// 50

  echo "<br>";

  echo "<br>";

  /*
   * 2 Faça um programa em PHP que atribua um número e informe
   * se este número é positivo ou negativo.
   */

  print "\u{1F30E} 2) Faça um programa em PHP que atribua um número e informe \n";

  echo "<br>";

  print "se este número é positivo ou negativo. \n";

  echo "<br>";

  echo "<br>";

  $num = 10;

  $num0 = 0;

  $num1 = -10;

  print "\u{1F30E} O número dado é: $num \n";

  echo "<br>";

  print "\u{1F30E} O número dado é: $num0 \n";

  echo "<br>";

  print "\u{1F30E} O número dado é: $num1 \n";

  echo "<br>";

  echo "<br>";

  print "\u{1F30E} O Resultado é: \n";

  echo "<br>";

  echo "<br>";

  $xif = 0;

  if ($num == $xif) {
    print "\u{1F30E} E ele é Neutro por ser igual a Zero: $num \n\n";
  } elseif ($num > $xif) {
    print "\u{1F30E} E ele é positivo: $num \n";
  } else {
    print "\u{1F30E} E ele é negativo: $num \n";
  }

  echo "<br>";

  if ($num0 == $xif) {
    print "\u{1F30E} E ele é Neutro por ser igual a Zero: $num0 \n\n";
  } elseif ($num0 > $xif) {
    print "\u{1F30E} E ele é positivo: $num0 \n";
  } else {
    print "\u{1F30E} E ele é negativo: $num0 \n";
  }

  echo "<br>";

  if ($num1 == $xif) {
    print "\u{1F30E} E ele é Neutro por ser igual a Zero: $num1 \n\n";
  } elseif ($num1 > $xif) {
    print "\u{1F30E} E ele é positivo: $num1 \n";
  } else {
    print "\u{1F30E} E ele é negativo: $num1 \n";
  }


  echo "<br>";

  echo "<br>";

  echo "<br>";

  /*
   * 3 Faça um programa em PHP que escreva o resultado
   * da soma dos números de 1 a 100.
   */

  print "\u{1F30E} 3) Faça um programa em PHP que escreva o resultado \n";

  echo "<br>";

  print "da soma dos números de 1 a 100. \n";

  echo "<br>";

  echo "<br>";

  $i = 1;
  $soma = 0;
  $elementos = 100;
  while ($i <= $elementos) {
    $soma = $soma + $i;
    $i++;

  }
  print "\u{1F30E} A soma de 1 a 100 é de: $soma \n";

  ?>

</h2>
</body>
</html>
