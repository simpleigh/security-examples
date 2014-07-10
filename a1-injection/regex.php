<!DOCTYPE html>
<html>
  <head>
    <title>Regex Injection (1)</title>
  </head>
  <body>
    <h1>Regex Injection (1)</h1>
    <p>Result:</p>
    <p>
      <pre>
<?php echo preg_replace($_GET['pattern'], $_GET['replacement'], $_GET['subject']); ?>
      </pre>
    </p>
    <p><a href="regex.html">Back</a></p>
    <p><a href="menu.html">Back to menu</a></p>
  </body>
</html>
