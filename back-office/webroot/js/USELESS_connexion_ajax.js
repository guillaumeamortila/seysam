	function createInstance()
	{
		var req = null;
		if (window.XMLHttpRequest){ //Mozilla, Safari, ...
			req = new XMLHttpRequest();
		}
		else if (window.ActiveXObject){
			try{
				req = new ActiveXObject("msxml2.XMLHTTTP");
			}
			catch(e){
				try{
					req = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e) {
					alert("XHR not created");
				}
			}
		}	
		return req;
	};

	function monAffichage(data, element)
	{
		var element = document.getElementById("top-session");
		var data = '<a href=\'?module=user&action=logout\'>SE DÉCONNECTER</a><br><a href=\'?module=user&action=users\'>MES INFOS</a>';
		element.innerHTML = data;
	}

	function monAjax(element)
	{
		var req = createInstance();
		var login = document.getElementById('login').value;
		var pass = document.getElementById('pass').value;
		var data = "login="+login+"&pass="+pass;

		req.onreadystatechange = function(){
			if(req.readyState ==  4){
				if(req.status == 200)
					monAffichage(req.responseText, element);
				else
					alert("Erreur Ajax : " + req.status + " " + req.statusText);
			}
		}

		req.open("POST", "index.php?module=user&action=login_ajax", true);
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		req.send(data);
	}









