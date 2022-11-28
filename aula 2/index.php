<?php
define('CHAVE', 39);
$boleana = true;
$boleano = false;
$inteiro1 = 64;
$inteiro2 = -65;
$inteiro3 = 017;
$inteiro4 = 0xa;
$inteiro5 = 0b1;
$float1 = 1.234;
$float2 = 1.82e3;
$float3 = 7E-10;
$arrayTeste = array(1, 'Jota', 15469);
/*for ($x = 0, $y = 0; $x < 3, $y < 3; $x++, $y++) {
if ($x == 0 || $x == 2) {
print($arrayTeste[$x] . "\t");
} else {
for ($z = 0; $z < 4; $z++) {
print($arrayTeste[1][$z] . "\t");
}
}
*/
array_push($arrayTeste, array('Float', 'Dex'));
for ($x = 0; $x < 4; $x++) {
    if ($x < 3) {
        print($arrayTeste[$x]);
    } elseif ($x == 3) {
        for ($z = 0; $z < 2; $z++)
            print($arrayTeste[3][$z]);
    }

}
//print_r($arrayTeste);
//print($float3);
//unset($float3);
//print($float3);
//print($inteiro1 + $inteiro2);
//print($inteiro1 / $inteiro3);
//print($inteiro1 - $inteiro2);
//print($inteiro1 *= $inteiro3);
//print($inteiro1 % $inteiro3);

//print($inteiro1++);
//print($inteiro1);

$stringEspecial = "O homem nunca \n\n\n pisou na lua";
$stringDiferenciada = "Serra comelão";
//print($stringEspecial);
?>


<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <p>
        <?php
        echo ($stringEspecial . "\t" . "\t" . "\t" . $stringDiferenciada);
        ?>
    </p>
    <p>
        <?php
        print(CHAVE);
        ?>
    </p>
</body>

</html>