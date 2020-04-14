<?php

require_once("config.php");

//$sql = new SQL();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

$root = new Usuario();

echo "ID: 1"; 
$root->loadById(1);

echo $root;

?>
)