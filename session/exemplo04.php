<?php

session_id('qhafbtl7b1ka43259o2e78118u');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>