<?php
$vet = array(10);

$vet[0] = filter_input(INPUT_POST, "nome1");
$vet[1] = filter_input(INPUT_POST, "nome2");
$vet[2] = filter_input(INPUT_POST, "nome3");
$vet[3] = filter_input(INPUT_POST, "nome4");
$vet[4] = filter_input(INPUT_POST, "nome5");
$vet[5] = filter_input(INPUT_POST, "nome6");
$vet[6] = filter_input(INPUT_POST, "nome7");
$vet[7] = filter_input(INPUT_POST, "nome8");
$vet[8] = filter_input(INPUT_POST, "nome9");
$vet[9] = filter_input(INPUT_POST, "nome10");

for ($i=0; $i < 10 ; $i++) { 
	echo "$vet[$i] <br>";
}


?>