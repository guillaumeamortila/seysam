<?php

include_once('pdo.inc.php');

if(isset($_GET['order']))
	$order = $_GET['order'];
else
	$order = 'name';

if(isset($_GET['way']))
	$way = $_GET['way'];
else
	$way = 'asc';

$sql = 'SELECT * FROM games ORDER BY ' . $order . ' ' . $way . ' LIMIT 0, 20';

$req = $db->query($sql);

$games = $req->fetchAll();


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="icon" href="lib/img/favicon.ico" />
    <!-- <link rel="stylesheet" type="text/css" href="css/global.css"> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
    	.to-order:hover{
			cursor:pointer;
			color:#888;
    	}
    </style>
</head>
<body>
<div id="header"><h2>TP-2 29/09/17</h2></div>
<div id="bloc-esthetic"></div>
<div class="bloc">
    <h1>Liste des jeux vidéos</h1>
    <table cellpadding="10">
    	<tr>
    		<th class='to-order' id='name'>Nom du jeu</th>
    		<th class='to-order' id='year'>Année de sortie</th>
    		<th class='to-order' id='distributor'>Producteur</th>
    		<th class='to-order' id='platform'>Plateforme</th>
    	</tr><?php
    	foreach ($games as $key => $game) {
    	?><tr>
    		<td><?= $game['name'] ?></td>
    		<td><?= $game['year'] ?></td>
    		<td><?= $game['distributor'] ?></td>
    		<td><?= $game['platform'] ?></td>
    	</tr><?php
    	}
    ?></table>
</div>

<script type="text/javascript">
	var order = '<?= $order ?>';
	var way = '<?= $way ?>';

	$('#'+order).css('text-decoration','underline');
	(way == 'desc') ? $('#'+order).append('<big> ^</big>') : $('#'+order).append('<big> v</big>');

	$('.to-order').on('click', function(){
		if ($(this).attr('id') == order)
			(way == 'desc') ? way = 'asc' : way = 'desc';
		window.location.href = '?order=' + $(this).attr('id') + '&way=' + way;
	});

</script>

</body>
</html>