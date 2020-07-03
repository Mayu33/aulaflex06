<?php
$arquivo = fopen('EuSeiOQueVoceFezNoVeraoPassado.txt','w');
if ($arquivo == false) die('Não foi possível criar o arquivo.');
$texto = “Passou calor”;
fwrite($arquivo, $ texto);
fclose($arquivo);
?>
