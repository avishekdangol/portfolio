<?php
  include __DIR__ . '/../includes/connect.php';
  require_once __DIR__ . '/../includes/autoload.php';
?>
<!doctype html>
<html>
  <head>
    <title><?=$title?></title>
    <link rel="stylesheet" href=<?="css/$css"?>>
    <link rel="icon" href="Assets/Icons/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/nav.css">
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>
    <nav>
      <h5><a id ="title" href="/index">Avishek Dangol</a>
        <button class="toggle-button">
          <i class="fa fa-bars"></i>
        </button>
      </h5>
      <div id="nav-wrapper">
        <ul class="links">
	  <?php
	    $navTable = new \Framework\DatabaseTable($connection, 'pages', 'id');

            $pages = $navTable->getData();
	    foreach ($pages as $page) {
	    $href = $page->href;
 	      echo "<li><a id='index' class='nav-link' href='/$href'>{$page->title}</a></li>";
	    }
	  ?>
        </ul>
      </div>
    </nav>

    <main>
      <?=$output?>
    </main>
  </body>
</html>