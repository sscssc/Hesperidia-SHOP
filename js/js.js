function connected(user){
	if (user){
		var div = document.getElementsByClassName('connect')[0];
		var form = document.getElementsByTagName('ul')[2];
		var connect = document.createElement('ul');
		var login = document.createElement('li');
		var textlog = document.createTextNode('Bienvenue '+user+' !');
		var textdec = document.createTextNode('Disconnect');
		var disco = document.createElement('button');

		connect.setAttribute('style', 'color: black;');
		disco.setAttribute('onclick', 'window.location.replace("php/disconnect.php")');

		div.removeChild(form);
		div.appendChild(connect);
		connect.appendChild(login);
		login.appendChild(textlog);
		disco.appendChild(textdec);
		connect.appendChild(disco);
	}
}