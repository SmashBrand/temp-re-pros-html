<?

/////////////////////////////////////////
// - Paths                          ////
/////////////////////////////////////////

	// - Global Paths
	$sitePath = "http://preview.smashbrand.com/crittenden_RE_Pros/";
	$incPath = "http://preview.smashbrand.com/crittenden_RE_Pros/inc/";
	$imgPath = "http://preview.smashbrand.com/crittenden_RE_Pros/img/";
	
///////////////////////////////////////////
// - Highlight ACTIVE page in Main Nav ////
///////////////////////////////////////////

$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');

//For Sub Nav & Others
$dir  = substr(strrchr(getcwd(), '/'), 1);

//For Main Nav
$dirMainNav  = getBasePathForCSS();


///////////////////////////////////////////
// - Additional Functions	           ////
///////////////////////////////////////////


function full_url()
{
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
	return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function getBasePathForCSS()
{
	$dummy = parse_url(full_url());
	if(is_array($dummy)){
		$path = $dummy['path'];
		$basePath = explode("/",$path);
		return $basePath[1];
	}
	
}


?>


