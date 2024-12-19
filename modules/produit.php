<?php 
class produit{
    private $nom;
    private $prix;
    private $description;
    public function __construct($nom,$prix,$description){
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
    }

    public function ajout_produit($connection){
        $query = $connection->prepare("INSERT INTO product (nom,prix,description) VALUES (:nom,:prix,:description)");
        $query->bindparam(':nom', $this->nom);
        $query->bindparam(':prix', $this->prix);
        $query->bindparam(':description', $this->description);
        $query->execute();
    }
    static function  aficher($connection){
        $query = $connection->prepare("SELECT id,nom,prix,description from product");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    static function supremer($connection,$id){
        $query = "DELETE FROM product WHERE id = $id ";
    }


}
?>