<?php 
    include_once "../config/connection.php";
    include_once "../modules/produit.php";

    $produit = produit::aficher($conn);
    foreach ($produit as $pd) {
    echo  "<tr>
    <th scope='row'>". $pd["id"] ."</th>
    <td>".$pd["nom"]."</td>
    <td>". $pd["prix"] . "</td>
    <td>" .  $pd["description"] . "</td>
    <td>
    <form action='../controllers/supremer_produit.php' method='post'>
        <input name='id_target' class='d-none' value='" . $pd["id"] ."'>
        <input type='submit' name='submit_supremer' class='btn btn-sm btn-danger' value='supremer'>
    </form>
    </td>
    </tr>";
    }
?>

