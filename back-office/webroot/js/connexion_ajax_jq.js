$(document).ready(function(){
	$("#ctform").submit(function(){
		$.post("?module=user&action=login_ajax", $("#ctform").serialize(), function(msg){
			
			if(msg!=0){ // login réussi

				var inner = "<span>Bonjour " + msg + " !</span><br><a href='?module=user&action=logout'>SE DÉCONNECTER</a><br><a href='?module=user&action=users'>MES INFOS</a>";
				if(msg == "admin")
					inner += "<br><a href='?module=user&action=users#dispformuser'>AJOUTER UN UTILISATEUR</a>"
				$("#top-session").html(inner);

			} else {
				$("#error").html("Mauvaise identification, réessayez");
			}
		});
		return false; // ne pas recharger la page
	});
});
