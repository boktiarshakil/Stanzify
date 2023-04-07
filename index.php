<!DOCTYPE html>
<html>
  <head>
    <title>Stanzify - Home</title>
  </head>
  <body>
    <h1>Welcome to Stanzify</h1>
    <p>Stanzify is a website dedicated to the art of poetry. It's a place where poetry lovers can come to explore and discover new works, as well as share their own. Our website features a collection of classic and contemporary poems, along with resources and tools to help aspiring poets develop their craft.</p>

    <h2>Poetry Notes</h2>
    <ul>
    <?php
      $dir = "./poetry_notes";
      $files = scandir($dir);
      foreach ($files as $file) {
        if (substr($file, -5) === ".html") {
          echo "<li><a href='$dir/$file'>$file</a></li>";
        }
      }
    ?>
    </ul>
  </body>
</html>
