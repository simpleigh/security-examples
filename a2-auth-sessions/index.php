<?php

ini_set('session.use_cookies', false);
ini_set('session.use_only_cookies', false);

session_start();

if (array_key_exists('name', $_GET)) {
    $_SESSION['name'] = $_GET['name'];
    header('Location: index.php?' . SID);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Session Handling Problems</title>
  </head>
  <body>
    <h1>Session Handling Problems</h1>
<?php if (array_key_exists('name', $_SESSION)): ?>
    <h2>Hi <?php echo $_SESSION['name']; ?>!</h2>
    <p><a href="index.php">Clear</a></p>
<?php else: ?>
    <form action="index.php?<?php echo SID; ?>" method="get">
      <table>
        <tr><td>Name:</td><td><input type="text" name="name"/></td></tr>
        <tr><td>     </td><td><input type="submit"          /></td></tr>
      </table>
    </form>
<?php endif; ?>
    <h2>How to use</h2>
    <p>
      Enter your name and click "Submit Query".
      The application will greet you.
      Note that the session ID is contained in the URL.
    </p>
    <h3>Hacking in</h3>
    <ul>
      <li>
        Open a different browser / in-private window / etc.
        and copy across the session ID in order to steal the session.
      </li>
      <li>
        Click "Clear" but then paste the original URL.
        It's still possible to get in as the session hasn't been cleared.
      </li>
    </ul>
    <p><a href="index.php?<?php echo SID; ?>">Direct link to this session</a></p>
  </body>
</html>
