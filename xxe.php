<!DOCTYPE html>
<html>
	<head>
		<title>XML Entity Injection</title>
	</head>
	<body>
		<h1>XML Entity Injection</h1>
		<p>Results:</p>
		<pre>
<?php
$document = new DOMDocument();
$document->resolveExternals = true;
$document->substituteEntities = true;

$document->loadXML($_POST['xml']);
echo $document->saveXML();
?>
		</pre>
	</body>
</html>
