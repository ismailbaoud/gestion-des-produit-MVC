<?php 
   include_once "../config/connection.php";
   include_once "../modules/produit.php";

if(isset($_POST["submit_supremer"])){
    $id = $_POST["id_target"];

    produit::supremer($conn,$id);
    var_dump("hi");
    header('location:../views/aficher.php');
    
}

?>