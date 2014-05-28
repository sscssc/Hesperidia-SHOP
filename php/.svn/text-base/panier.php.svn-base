<?php
session_start();
include "fpanier.php";

$action = isset($_GET["action"]);

if($action != null){
  	$n = (isset($_GET['n']) ? $_GET['n'] : null);
    $q = (isset($_GET['q']) ? $_GET['q'] : null);
    $p = (isset($_GET['p']) ? $_GET['p'] : null);
    $n = preg_replace("#\v#", '',$n);

    if (is_array($q)){
       $nb = array();
       $i = 0;
       foreach ($q as $contenu)
        $nb[$i++] = intval($contenu);
    }else
   		$q = intval($q);  
}

switch($action){
    Case "add":
 	    add_item($n,$q,$p);
 	    echo "<script>history.go(-1);</script>"; 
        break;
    Case "rm":
        rm_item($n);
        break;
    Default:
        break;
}
if ($show = 1){
	echo '<form action="panier.php">
		<table style="width: 400px">
			<tr>
				<td>Item</td>
				<td>Quantiter</td>
				<td>Prix Unitaire</td>
				<td>Supprimer</td>
			</tr>';
				init_panier();
				$nb = count($_SESSION["panier"]["name"]);
				if ($nb <= 0)
					echo "<tr><td>Votre panier est vide</td></tr>";
				else{
					for ($i=0 ;$i < $nb ; $i++){
						echo "<tr>
								<td>".$_SESSION['panier']['name'][$i]."</td>
							<td><input type=text size=4 name=q[] value=".$_SESSION['panier']['nb'][$i]." /></td>
							<td>".$_SESSION['panier']['prix'][$i]."</td>
							<td><a href=panier.php?action=rm&n=".$_SESSION['panier']['name'][$i].">X</a></td>
							</tr>";
					}

					echo "<tr>
							<td colspan=2></td>
							<td>Total : ".total()."</td>
						 </tr>";
				}
		
		echo "</table>
	</form>";
}