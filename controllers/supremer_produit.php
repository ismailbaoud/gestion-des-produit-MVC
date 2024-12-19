<?php 
   include_once "../config/connection.php";
   include_once "../modules/produit.php";
$id = null;
if(isset($_POST["submit_supremer"])){
    $id = $_POST["id_target"];
}
produit::supprimer_produit($conn,$id);
header('location:../views/aficher.php');

?>