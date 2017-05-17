window.onload = function(){

	document.getElementById('listusers').onchange = function(){
		if(document.getElementById('listusers') == 0){
			var url = "?module=comment&action=admin";
		} else {
			var url = "?module=comment&action=admin&user="+document.getElementById('listusers').value;
		}
		window.location = url;
	}

}