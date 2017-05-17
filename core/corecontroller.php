<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function location($module, $action, $get="") {

    $url = "Location:?module=" . $module . "&action=" . $action;

    if($get != "") {

        $url .= "&" . $get;

    }

    header($url);
    exit;

}

// function protection($module, $action, $session, $level) {

//     if(!isset($_SESSION[$session])) {

//         location($module, $action, "notif=protection");

//     }

//     if(!isset($_SESSION["level"])) {

//         location($module, $action, "notif=protection");

//     }

//     if($_SESSION["level"] < $level) {

//         header("Location:?module=" . $module . "&action=" . $action . "&notif=admin");
//         exit;

//     }

// }

function protection($module, $action, $session) {

    if(!isset($_SESSION[$session])) {

        location($module, $action, "notif=protection");

    }

}


function verification_form($value = array()) {

    $flag = 0;

    foreach ($value as $val) {

        if($val != "") {
            $flag = 1;
        } else {
            $flag = 0;
            break;
        }
    }

    return $flag;

}

function error($e, $libele) {

    if(ENV == "DEV") {

        die($libele . " : " . $e->getMessage());

    } else {

        die("Erreur technique");

    }

}

// GESTION DU PANIER

function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
      $_SESSION['panier']['id'] = array();
      $_SESSION['panier']['qte'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}

function ajouterArticle($id, $qte, $prix) {

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($id,  $_SESSION['panier']['id']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qte'][$positionProduit] += $qte ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['id'],$id);
         array_push( $_SESSION['panier']['qte'],$qte);
         array_push( $_SESSION['panier']['prix'],$prix);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimerArticle($id){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['id'] = array();
      $tmp['qte'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
      {
         if ($_SESSION['panier']['id'][$i] !== $id)
         {
            array_push( $tmp['id'],$_SESSION['panier']['id'][$i]);
            array_push( $tmp['qte'],$_SESSION['panier']['qte'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modifierQTeArticle($id,$qte){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qte > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($id,  $_SESSION['panier']['id']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qte'][$positionProduit] = $qte ;
         }
      }
      else
      supprimerArticle($id);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
   {
      $total += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return $total;
}

function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['id']);
   else
   return 0;
}

function supprimePanier(){
   unset($_SESSION['panier']);
}