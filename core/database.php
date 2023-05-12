<?php
    $typeDatase="DEV";
	if($typeDatase == "PROD"){
 	    DEFINE("HOST","");
	    DEFINE("USER","");
	    DEFINE("PASSWORD","");
	    DEFINE("PORT","");
	    DEFINE("DATABASE","");
	 }else{
		DEFINE("HOST","localhost");
	    DEFINE("USER","root");
	    DEFINE("PASSWORD","");
	    DEFINE("PORT","3306");
	    DEFINE("DATABASE","sistema_web_ugel");
	}

?>