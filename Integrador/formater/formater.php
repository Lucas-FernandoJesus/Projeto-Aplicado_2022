<?php

function estadosBrasil($show, $value="", $name="estado"){
	$estados = array(
		'AC' => 'Acre',
		'AL' => 'Alagoas',
		'AP' => 'Amapá',
		'AM' => 'Amazonas',
		'BA' => 'Bahia',
		'CE' => 'Ceará',
		'DF' => 'Distrito Federal',
		'ES' => 'Espírito Santo',
		'GO' => 'Goiás',
		'MA' => 'Maranhão',
		'MT' => 'Mato Grosso',
		'MS' => 'Mato Grosso do Sul',
		'MG' => 'Minas Gerais',
		'PA' => 'Pará',
		'PB' => 'Paraíba',
		'PR' => 'Paraná',
		'PE' => 'Pernambuco',
		'PI' => 'Piauí',
		'RJ' => 'Rio de Janeiro',
		'RN' => 'Rio Grande do Norte',
		'RS' => 'Rio Grande do Sul',
		'RO' => 'Rondônia',
		'RR' => 'Roraima',
		'SC' => 'Santa Catarina',
		'SP' => 'São Paulo',
		'SE' => 'Serigipe',
		'TO' => 'Tocantins'
	);
	if ($show == "form") {
		echo '<select name="'.$name.'" required>';
		echo '<option value=""></option>';
		foreach ($estados as $siglaUF => $nomeUF) {
			if($siglaUF == $value){
				echo '<option value="'.$siglaUF.'" selected>'.$nomeUF.'</option>';
			} else {
				echo '<option value="'.$siglaUF.'">'.$nomeUF.'</option>';
			}
		}
		echo '</select>';
	}
	else if ($show == "reverso") {
		foreach ($estados as $siglaUF => $nomeUF) {
			if($value == $siglaUF) {
				return $nomeUF;
			}
		}
	}
}

?>