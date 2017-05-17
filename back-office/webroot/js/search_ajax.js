$(document).ready(function(){
	$("#saisie").keyup(function(car){
		if($("#saisie").val().length > 2){	
			console.log(car)
			$.post("webroot/ajax/ajaxAuto1.php",$("#formsearch").serialize(), function(texte){
				$("#titres").html(texte);
			});
		}
	});
	$(document).on('click', '.lien', function(){
		$("#article").load("webroot/ajax/ajaxAuto2.php?id=" + $(this).attr("title"));
		return false;
	});
});