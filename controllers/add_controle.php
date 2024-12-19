<?php 
include_once "../config/connection.php";
include_once "../modules/produit.php";

if(isset($_POST["ajout_btn"])){
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $description = $_POST["descrition"];
    $ajout = new produit($nom,$prix,$description);
    $ajout->ajout_produit($conn);
    header("location:../views/aficher.php");
}
var_dump("hi");