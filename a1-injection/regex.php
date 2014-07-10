<!DOCTYPE html>
<html>
	<head>
		<title>Regex Injection (1)</title>
	</head>
	<body>
		<h1>Regex Injection (1)</h1>
		<p>Result:</p>
		<pre>
<?php echo preg_replace($_GET['pattern'], $_GET['replacement'], $_GET['subject']); ?>
		</pre>
	</body>
</html>
