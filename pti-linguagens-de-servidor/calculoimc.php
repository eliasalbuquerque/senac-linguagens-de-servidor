<?php

//Variaveis de altura e peso
$alt = 1.70;
$pes = 64;

//Funcao para calcular o imc e 
//retorno da funcao com 2 casa decimais
function imc($altura, $peso){
	$imc = $peso / ($altura * $altura);
	return number_format($imc, 2, '.', ',');
}

//Funcao para classificar o imc com o array
function classificacao($imc){
	$faixa = ["Magreza", "Saúdavel", "Sobrepeso", "Obesidade Grau I", "Obesidade Grau II", "Obesidade Grau III"];
	if ($imc <= 18.5) {
		return $faixa[0];
	} elseif ($imc <= 24.9) {
		return $faixa[1];
	} elseif ($imc <= 29.9) {
		return $faixa[2];
	} elseif ($imc <= 34.9) {
		return $faixa[3];
	} elseif ($imc <= 39.9) {
		return $faixa[4];
	} else {
		return $faixa[5];
	}
}

//Output
echo " Atenção, seu IMC é " . imc($alt, $pes) . ", e você está classificado como " . classificacao(imc($alt, $pes));
?>