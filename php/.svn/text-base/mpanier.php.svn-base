<?php
	include ("fpanier.php");
	session_start();
	$n = (isset($_GET['n']) ? $_GET['n'] : null);

	$action = (isset($_GET['action']) ? $_GET['action'] : null );
	switch ($action){
	    Case "rm":
	        rm_item($n);
	        break;
	    Default:
	    	break;
	}
?>
<form action="panier.php">
<table style="width: 150px">
	<tr>
		<td></br></br></td>
	</tr>
	<?php
	init_panier();
		$nb = count($_SESSION['panier']['name']);
		if ($nb <= 0)
			echo "<tr><td>Votre panier est vide</ td></tr>";
		else{
			for ($i=0 ;$i < $nb ; $i++){
				echo "<tr>
						<td><a href=mpanier.php?action=rm&n=".$_SESSION['panier']['name'][$i].">".$_SESSION['panier']['name'][$i]."</a></td>
						<td><input type=text size=1 name=q[] value=".$_SESSION['panier']['nb'][$i]." /></td>";
			}

			echo "<tr>
					<td>Total : ".total()." Euro</td>
				</tr>";
		}
	
	?>
</table>
</form>