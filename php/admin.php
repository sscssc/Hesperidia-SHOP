<?php

function admin(){
	echo "<div class='contenu'>
			<div class='head'><label>Add News</label></div>
			<div class='lastadd'>
				</br>Titre:</br>
				<form method='POST' action='php/news.php'>
					<input type=text name='title' />
					<h4>
						<textarea rows=8 cols=40 name='textnew'></textarea>
					</h4>
					<input type='submit' value='Ajouter' />
				</form>
			</div>
		</div>";
}


