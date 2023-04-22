<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];
if ($countrycode=='PT')
    header( 'Location: http://stock.alunos.esmonserrate.org/template/estagio/pt/index.php' ) ;
else 
    header( 'Location: http://stock.alunos.esmonserrate.org/template/estagio/en/index.php' ) ;

?>