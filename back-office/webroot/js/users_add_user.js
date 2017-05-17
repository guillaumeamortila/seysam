var clicked = false;

function clickDisp(){
	if(clicked == false) {
		clicked = true;
		document.getElementById("dispformuser").innerHTML = "<i class='material-icons'>remove_circle_outline</i> réduire";
		document.getElementById("formuser").style.display = "flex";
	} else {
		clicked = false;
		document.getElementById("dispformuser").innerHTML = "<i class='material-icons'>add_circle_outline</i> ajouter un utilisateur";
		document.getElementById("formuser").style.display = "none";
	}
}



