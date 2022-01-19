<?php
include ("clase.php");

$n1=10;
$n2=5;

echo "la suma es : ".matematica::sumar($n1,$n2);
echo "<br>";
echo "la resta es : ".matematica::restar($n1,$n2);
echo "<br>";
echo "la division es : ".matematica::dividir($n1,$n2);
echo "<br>";
echo"la multiplicacion es : ".matematica::multiplicar($n1,$n2);

?>