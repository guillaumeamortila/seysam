<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

?>

<div class="footer">
	<div>
		<div>
			<h4 class="yellow">Seysam</h4>
			<div><a href="?module=common_page&action=concept">Qui sommes-nous ?</a></div>
			<div><a href="?module=common_page&action=faq">FAQ</a></div>
			<?php
			if (isset($_SESSION["user"])){
			?>
				<div><a href="?module=user&action=detail">Espace personnel</a></div>
			<?php } ?>
		</div>
		<div>
			<h4 class="blue">Using Seysam</h4>
			<div><a href="?module=common_page&action=manuel_vendeur">Manuel du vendeur</a></div>
			<div>Notre sélection</div>
			<div><a href="?module=actualite&action=index">Actualités</a></div>
		</div>
		<div>
			<h4 class="green">Legal</h4>
			<div><a href="?module=common_page&action=reglement">Réglement</a></div>
			<div><a href="?module=common_page&action=mentions">Mentions légales</a></div>
			<div><a href="?module=common_page&action=politique_non_discrimination">Politique de non-discrimination</a></div>
		</div>
	</div>

	<div>2017 © Designed with <span class="dot">♥</span> by the Seysam crew</div>

</div>

</body>
</html>


<!-- <script type="text/javascript" src="webroot/js/global.js"></script> -->