<?php
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");
$hoje = ucwords(strftime("%A" . ", mês de ".  "%B"));
$hora = date("h:i:s");


echo "Hoje é " . $hoje . ", horário atual: " . $hora;

?>