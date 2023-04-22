<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];
if ($countrycode=='PT') {
    header( 'Location: /pt' ) ;
} else { 
    header( 'Location: /en' ) ;
}
?>