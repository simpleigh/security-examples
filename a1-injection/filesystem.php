<!DOCTYPE html>
<html>
  <head>
    <title>Filesystem Injection</title>
  </head>
  <body>
    <h1>Filesystem Injection</h1>
    <p>File contents:</p>
    <p>
      <pre>
<?php echo file_get_contents('files/' . $_GET['file']); ?>
      </pre>
    </p>
    <p><a href="filesystem.html">Back</a></p>
    <p><a href="index.html">Back to menu</a></p>
  </body>
</html>
