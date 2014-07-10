<!DOCTYPE html>
<html>
  <head>
    <title>XML Entity Injection</title>
  </head>
  <body>
    <h1>XML Entity Injection</h1>
    <p>Results:</p>
    <p>
      <pre>
<?php
$document = new DOMDocument();
$document->resolveExternals = true;
$document->substituteEntities = true;

$document->loadXML($_POST['xml']);
echo $document->saveXML();
?>
      </pre>
    </p>
    <p><a href="xml.html">Back</a></p>
    <p><a href="index.html">Back to menu</a></p>
  </body>
</html>
