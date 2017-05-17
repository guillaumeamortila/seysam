<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.php"); ?>

<script type="text/javascript">

			$(document).ready(function(){
				$("#users_list").change(function(){
					$("#cat_list").load("webroot/ajax/cat_filter.php?user_id="+$("#users_list").val())
				});

                $("#form_search").submit(function(){
                    $("#search").load("webroot/ajax/post_search.php?user_id="+$("#users_list").val()+"&cat_id="+$("#cat_list").val());
                    return false;
                });
			});
</script>

<div>
    <form id="form_search" method="post" action="#">
        <?php scroll_list("users_list", '', 'users_list', $users, 'ID', "display_name") ?>

        <select name="cat_list" class='' id="cat_list">
        	<option value="0">Choisir un user</option>
        </select>
        <input type="submit" value="Chercher des articles" /> 
    </form>

    <h3> Liste des articles</h3>
    <div>
    	Lancer la recherche !
    </div> 
</div>
<?php include("app/view/layout/footer.inc.php"); ?>