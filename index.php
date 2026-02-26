<?php

include "conexion.php";
include "tablas.php";

$bdd = estableceConexion();
visualizarTabla($bdd->query("SELECT * FROM futbolistas"));