// $(document).ready(function(){
//     $("#connexion-form").submit(function(){
//         $.post("?module=user&action=login_ajax", $("#connexion-form").serialize(), function(msg){

//             if(msg!=0){ // login réussi

//                 var inner = "<span>Bonjour " + msg + " !</span><br><a href='?module=user&action=logout'>SE DÉCONNECTER</a><br><a href='?module=user&action=users'>MES INFOS</a>";
//                 if(msg == "admin")
//                     inner += "<br><a href='?module=user&action=users#dispformuser'>AJOUTER UN UTILISATEUR</a>"
//                 $("#top-session").html(inner);

//             } else {
//                 $("#error").html("Mauvaise identification, réessayez");
//             }
//         });
//         return false; // ne pas recharger la page
//     });
// });



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
}

function monAffichage(data, element) {
    element.innerHTML = data;
}

function ajaxPost(element, email, mp) {

    var req =  createInstance();
    var data = "email=" + email + "&password=" + mp;

    req.onreadystatechange = function(){

        if(req.readyState ==  4){
            if(req.status == 200){
                monAffichage(req.responseText, element);
            }
            else{
                alert("Erreur Ajax : " + req.status + " " + req.statusText);
            }

        }
    };

    req.open("POST", "?module=user&action=loginajax", true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send(data);

}


// $(document).ready(function(){
//     $("#connexion-form").submit(function(){
//         $.post("?module=user&action=loginajax", $("#connexion-form").serialize(), function(msg){

//             if(msg!=0){ // login réussi
//                 console.log(msg);

//                 // var inner = '<ul class="nav-mobile"><li><a href="?module=user&action=logout" data-toggle="tooltip" data-placement="bottom" title="Modifier">Deconnexion</a></li></ul>';
//                 var inner = '<div class="nav-link"><a href="#">Actualités</a></div><div class="nav-link"><a href="wishlist.php">Idées cadeaux</a></div><div class="nav-link"><a href="?module=user&action=detail">Espace perso</a></div><div class="appear"><input class="searchbar" type="text" name="search" placeholder="Tapez votre recherche"></div><div class="nav-link loupe"><a href="#"><div class="search"></div></a></div> <div class="nav-link"><a href="#"><div class="cart"></div></a></div><div class="nav-link"><a href="?module=user&action=logout">Deco</a></div>';
//                 // $(".nav"    ).html(inner);

//                 $('.menu').html(inner);
//             } else {
//                 $("#error").html("Mauvaise identification, réessayez");
//             }
//         });
//         $(".popup").hide();
//         $(".popup-bg").hide();
//         return false; // ne pas recharger la page
//     });
// });

function recupParam(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;    
    }
    return vars;
}


function changement_page(){
  // var content=document.getElementById('content'+nb);
    alert("e");
    // $(#main_user).load('webroot/ajax/reload_articles.php #main_user');
}
