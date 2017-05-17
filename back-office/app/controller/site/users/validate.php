<?php
	if (isset($_GET["key"])) {

		include("app/model/user/update_user.php");
		$retour = update_server($_GET["key"]);

		if($retour) {
			location("user", "login", "notif=validate_ok");
		}

		else {
			define("PAGE_TITLE", "Validation de compte");
			include("app/view/user/novalidate.php");
		}
	} else {
		location(DEFAULT_MODULE, DEFAULT_ACTION, "notif=validate_nok");
	}