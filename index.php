<?php 

$dir    	= 'imagens/';

$arquivos = glob($dir . "*.*");
$filecount = count($arquivos);
echo "<p>Em /imagens tem $filecount imagens</p>";

echo "<form action='' method='POST'>";
echo "<button name='submit' type='submit'>Copiar!</button>";
echo "</form>";

if(!empty($_POST)){
    //Cria nova pasta
    mkdir("new_imagens");
    $dirDestino = 'new_imagens/';

	foreach($arquivos as $img){ 

		//Reescreve sem o nome da pasta
		$new_img = str_replace($dir, "", $img);

		if (!copy($img, $dirDestino.$new_img)) {
			echo "Falha ao realizar cópia.";
		}else{
			echo "<p>Cópia de ".$new_img." realizado com sucesso!</p>";
		}	

	}
}



