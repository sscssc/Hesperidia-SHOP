<?php

function page(){
	if (isset($_GET["page"])){
		if ($_GET["page"] == "reg"){
			if (!isset($_SESSION["login"])) reg();
			else news();
		}elseif ($_GET["page"] == "gold")
			gold();
		elseif ($_GET["page"] == "shop")
			shop();
		elseif ($_GET["page"] == "gold")
			gold();
		elseif ($_GET["page"] == "admin")
			if (member_lvl($_SESSION["login"]) == 0)
				header ("Location: index.php");
			else admin();
		elseif ($_GET["page"] == "panier")
			panier();
		elseif ($_GET["page"] == "mount")
			mount();
		elseif ($_GET["page"] == "item")
			item();
		else news();
	}else news();
}

function shop(){
	echo '
	<div class="contenu">
		<div class="head"><a>Shop Hesperidia</a></div>
		<div class="shoplist">
			<a href="index.php?page=item">
				<div class="article1">
				   <label> List des items</label>
				</div>
			</a>
			<a href="index.php?page=gold">
				<div class="article2">
					<label>Achettez des gold</label>
				</div>
			</a>
			<a href="index.php?page=mount">
				<div class="article3">
					<label>List des montures</label>
				</div>
			</a>
			<a href="index.php?page=stat">
				<div class="article4">
					<label>Boostez vos stat</label>
				</div>
			</a>
			<a href="index.php?page=comp">
				<div class="article5">
					<label>Boost Competence</label>
				</div>
			</a>			
		</div>
	</div>';
}

function reg(){
	if ($_GET["a"] == "login")
		echo "<script>alert('Login incorrect');</script>";
	if ($_GET["a"] == "pass")
		echo "<script>alert('Password incorrect');</script>";
	if ($_GET["a"] == "email")
		echo "<script>alert('E-mail deja utiliser');</script>";
	if ($_GET["a"] == "name")
		echo "<script>alert('Nom incorrect');</script>";

	echo '
	<div class="contenu">
			<div class="head"><a>Inscription</a></div>
			<div class="register">
				<form method="POST" action="php/member.php">
					</br><a>Nom :</a>
					<input name="fname" placeholder="Name"></br>
					<a>Prenom :</a>
					<input name="fsubn" placeholder="First Name"></br>
					<a>Login :</a>
					<input name="login" placeholder="Login"></br>
					<a>E-mail :</a>
					<input name="mail" placeholder="E-mail"></br>
					<a>Password :</a>
					<input name="pass" placeholder="Password" type="password"></br>
					<a>confirmation :</a>
					<input name="conf" placeholder="Confimation" type="password"></br>
					<a>Adresse :</a>
					<input name="adre" placeholder="Address"></br>
					<a>Code postal :</a>
					<input name="code" placeholder="Postal Code"></br>
					<a>Ville :</a>
					<input name="city"  placeholder="City"></br>
					<a>Telephone :</a>
					<input placeholder="Phone Number"></br></br>
					</a>
					<input type="submit" value="Enregistrer">
					<input type="hidden" name="reg">
				</form>
			</div>
		</div>';
}

function gold(){
	echo '
	<div class="contenu">
		<div class="head"><a>Liste des Items</a></div>
		<div class="shoplist">
			<h3>Pour ajouter au panier cliquer sur l image de votre choix.</h3>
			<table border="1">
				<tr>
					<th>Gold Pack 1</th>
					<th>Caractéristiques</th>
					<th>Level requis</th>
					<th>Prix</th>
				</tr>
				<tr>
				<td>
					<center>
						<div class="goldpack">
					   		<a href="php/panier.php?action=add&amp;n=Gold&amp;p=0.10&amp;q=100"><img src="img/gold.png"></a>
						</div>
					</center>
				</td>
				<td>100 Gold</td>
				<td>--</td>
				<td>10 Euro</td>
				<tr>
					<th>Gold Pack 2</th>
					<th>Caractéristiques</th>
					<th>Level requis</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td>
						<center><div class="goldpack">
					   		<a href="php/panier.php?action=add&amp;n=Gold&amp;p=0.10&amp;q=600"><img src="img/gold.png"></a>
						</div></a></center>
					</td>
					<td>600 Gold</td>
					<td>--</td>
					<td>20 Euros</td>
				</tr>
			</table>		
		</div>
	</div>';
}

function item(){
	echo '
	<div class="contenu">
			<div class="head"><a>Liste des Items</a></div>
			<div class="shoplist">
				<h3>Pour ajouter au panier cliquer sur l image de votre choix.</h3>
				<table border="1">
					<tr>
						<th>Epee de teebu</th>
						<th>Caracteristique</th>
						<th>Level requi</th>
						<th>Prix</th>
					</tr>
					<tr>
					<td>
						<center><div class="item">
						   <a href="php/panier.php?action=add&amp;n=Epee_de_Teebu&amp;p=10&amp;q=1"><img src="img/armes.png"></a>
						</div></center>
					</td>
					<td>Degats : 96 - 179	Vitesse 2.90</br>
						Chances quand vous touchez :</br>
						Frappe une cible et lui inflige</br> 150 points de degats de Feu.
					</td>
					<td>60</td>
					<td>10 Euro</td>
					<tr>
						<th>Potion cheater</th>
						<th>Caracteristique</th>
						<th>Level requi</th>
						<th>Prix</th>
					</tr>
					<tr>
						<td>
							<center><div class="item">
						   		<a href="php/panier.php?action=add&amp;n=Potion_cheater&amp;p=100&amp;q=1"><img src="img/popo.png">
							</div></center>
						</td>
						<td>God mode</td>
						<td>65</td>
						<td>100 Euro</td>
					</tr>
				</table>		
			</div>
		</div>';
}

function mount(){
	echo '
	<div class="contenu">
		<div class="head"><a>Liste des Items</a></div>
		<div class="shoplist">
			<h3>Pour ajouter au panier cliquer sur l image de votre choix.</h3>
			<table border="1">
				<tr>
					<th>Tigre Spectral</th>
					<th>Caracteristique</th>
					<th>Level requi</th>
					<th>Prix</th>
				</tr>
				<tr>
				<td>
					<center><a href="php/panier.php?action=add&amp;n=Tigre_Sprectral&amp;p=10&amp;q=1"><div class="mount">
					   <label> </label>
					</div></a></center>
				</td>
				<td>Vitesse 100%</td>
				<td>60</td>
				<td>10 Euro</td>
				<tr>
					<th>Loup Spectral</th>
					<th>Caracteristique</th>
					<th>Level requi</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td>
						<center><a href="php/panier.php?action=add&amp;n=Loup_Spectral&amp;p=10&amp;q=1"><div class="mount1" >
					   		<label> </label>
						</div></a></center>
					</td>
					<td>Vitesse 100%</td>
					<td>60</td>
					<td>10 Euro</td>
				</tr>
			</table>		
		</div>
	</div>';
}

function panier(){
	echo '
	<div class="contenu">
		<div class="head"><a>Detail de votre panier</a></div>
		<div class="shoplist">
			<iframe src="php/panier.php" width="420" height="250" style="border:0px solid orange"></iframe> 
		</div>
		<button name="buy" type="submit">Buy</button>
	</div>';
}