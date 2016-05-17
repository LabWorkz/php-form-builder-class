<?php
$cwd = str_replace("\\", "/", getcwd());
if(strpos($cwd, "/examples") !== false) {
	$pathPrefix = "../";
	$examplePathPrefix = "";
}
else {
	$pathPrefix = "";
	$examplePathPrefix = "examples/";
}

$version = file_get_contents($pathPrefix . "version");

function prettyprint($code) {
	echo '<pre class="prettyprint linenums">', str_replace("\t", str_repeat("&nbsp", 4), htmlspecialchars($code)), '</pre>';
}
?>	

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Form Builder Class</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
			  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
		<link href="<?php echo $pathPrefix; ?>prettify/prettify.css" rel="stylesheet">

		
	</head>

	<body onload="prettyPrint()">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="<?php echo $pathPrefix; ?>index.php">PHP Form Builder Class</a>
					<div class="nav-collapse collapse">

					</div>
				</div>
			</div>
		</div>

