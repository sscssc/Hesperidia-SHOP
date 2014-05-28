<?php 

add_news();

function add_news(){
	if (isset($_POST["title"]) && $_POST["title"] != NULL){
		$db = mysql_connect("localhost", "carlos_j", "oaxEi6sQ");
		mysql_select_db("carlos_j", $db);
		$sql = "INSERT INTO news VALUES('', '".$_POST["title"]."', '', '".$_POST["textnew"]."', '0')";
		mysql_query($sql);
		header ("Location: ../index.php");
	}
}


function news(){
	$script_req_nb = "SELECT count(*) FROM news";
	$req = mysql_query($script_req_nb);
	$ret_sql = mysql_fetch_array($req);

	$id_view = (isset($_GET["n"]) ? $id = $_GET["n"] : NULL);

	$last_news = $ret_sql[0];

	$script_req = "SELECT * FROM news WHERE id='".$last_news."'";
	$req = mysql_query($script_req);
	$ret_sql = mysql_fetch_array($req);

	echo "<div class='contenu'>
			<div class='head'><label>".$ret_sql[1]."</label></div>
			<div class='lastadd'>
				<h4>".$ret_sql[3]."</h4>
			</div>
		</div>";
}