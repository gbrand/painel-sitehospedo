<?php
 $senha = $_POST['ed-senha-email'];
 $confirma = $_POST['ed-cfrm-senha-email'];

 if ($confirma == $senha) {
 	echo "Senhas corretas";
 }else{
 	echo "Senhas incorretas";
 }
?>