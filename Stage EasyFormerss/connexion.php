<?php
try {
define("HOTE", 'localhost');
define("BASE", 'EasyFormers');
define("USER", 'root');
define("MDP", '');
$bdd = new PDO('mysql:host=' . HOTE . ';dbname=' . BASE, USER, MDP, array(PDO::ATTR_ERRMODE
=> PDO::ERRMODE_EXCEPTION));
$bdd->exec('set names utf8');
} catch (PDOException $e) {
die('Erreur : ' . $e->getMessage());
}
?>