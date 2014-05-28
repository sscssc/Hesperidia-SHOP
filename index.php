<?php 
	include "php/member.php";
	include "php/news.php";
	include "php/page.php";
	include "php/admin.php"
?>
<html>
<head>
  <title>Shop Hesperidia</title>
  <link rel="stylesheet" href="Hesperidia.css">
  <script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<div class="struct">
		<div id="headbar">
			<h1 class="banner">Bienvenue sur le Shop Hesperidia</h1>
			<ul class="headbar">
				<a>|</a>
				<a href="index.php">Accueil</a>
				<a>|</a>
				<a href="index.php?page=shop">Shop Hesperidia</a>   
				<a>|</a>
				<a href="index.php?page=reg">Inscription</a>
				<a>|</a>
			</ul>
		</div>
		<div class="nav">
			<ul class="nav">
				<li><a href="index.php?page=item">Item Shop</a></li>   
				<li><a href="index.php?page=gold">Gold Shop</a></li>   
				<li><a href="index.php?page=stat">Upgrade stat</a></li>   
				<li><a href="index.php?page=comp">Upgrade Comp</a></li>
			</ul>
		</div>
		<div class="connect">
			<ul class="connect">
				<form method="POST" action="php/member.php">
					<li><a>Login :<br/></a></li>
					<input name="clogin" class="login">
					<li><a>Password :<br/></a></li> 
					<input name="cpass" class="pass" type="password">
					<input type="submit" value="Connection">
				</form>
			</ul>
			<?php isconnected(); ?>
		</div>
		<div class="top">
			<h2>Top Ventes</h2>
			<a href="index.php?page=gold">
				<div class="gold">
					<h3>gold</h3>
				</div>
			</a>
			<a href="index.php?page=lvl">
				<div class="lvlup">
					<h3>Level</h3>
				</div>
			</a>
			<a href="index.php?page=stuff">
				<div class="stuff">
					<h3>stuff</h3>
				</div>
			</a>
		</div>
		<div class="panier">
			<a class="apanier" href="index.php?page=panier"><h3 name="panier">Panier (<?php 
				if (isset($_SESSION['panier'])) echo count($_SESSION['panier']['name']);
				else echo "0";
			?>)</h3></a>
			<iframe src="php/mpanier.php" width="180" height="210" style="border:0px solid orange"></iframe> 
			<button name="buy" type="submit">Buy</button>
		</div>
		<?php page(); ?>
		<div class="foot">
				<a>Copyright 2013-2013 Prep ETNA Tous droit reserves</a>
				<script type="text/javascript">isconnected();</script>
		</div>
	</div>
</body>