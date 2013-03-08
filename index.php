<pre>
U mnie $_SERVER['PATH_INFO'] jest pusta, za to jest $_SERVER['REDIRECT_URL'] oraz $_SERVER['REQUEST_URI']

<?php
  if (null !== $_SERVER["PATH_INFO"]) {
    echo '$_SERVER["PATH_INFO"]    = ' . $_SERVER["PATH_INFO"] . PHP_EOL;
  }
  if (null !== $_SERVER["REDIRECT_URL"]) {
    echo '$_SERVER["REDIRECT_URL"] = ' . $_SERVER["REDIRECT_URL"] . PHP_EOL;
  }
  if (null !== $_SERVER["REQUEST_URI"]) {
    echo '$_SERVER["REQUEST_URI"]  = ' . $_SERVER["REQUEST_URI"] . PHP_EOL;
  }
  if (null !== $_SERVER["QUERY_STRING"]) {
    echo '$_SERVER["QUERY_STRING"] = ' . $_SERVER["QUERY_STRING"] . PHP_EOL . PHP_EOL;
  }

  if (null !== $_GET["w"]) {
    echo '$_GET["w"] = ' . $_GET["w"] . PHP_EOL;
  }
  if (null !== $_GET["z"]) {
    echo '$_GET["z"] = ' . $_GET["z"] . PHP_EOL;
  }
?>
</pre>
