	//Leitura de JSON com PHP
	
	//Atribuição de dados a variavel $dadosJ
	$dadosJ = file_get_contents('https://viacep.com.br/ws/*NUMERO-CEP*/json/');
  
  //decodificação de dados
	$json = json_decode($dadosJ);
	
  //impreção de dados
	echo '<br>'. $json->localidade;
	echo '<br>'. $json->logradouro;
	echo '<br>'. $json->bairro;
	echo '<br>'. $json->uf;
	?>
