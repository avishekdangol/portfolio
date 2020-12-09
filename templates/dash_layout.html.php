<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
    <link rel="stylesheet" href=<?="css/$css"?>>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <nav class="navbar bg-dark">
      <div class="container">
        <div class="navbar-header">
          <h1>Welcome <?=$_SESSION['u_name']; ?>!</h1>
        </div>
        <div>    
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-links" href="logout">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container">
        <div class="row">
          <div class="side-panel">
            <ul class="list-group">
	      <li class="list-group-item" id="sidebar-title">SIDEBAR</li>
	      <a href="dash"><li class="list-group-item">Dashboard</li></a>
	      <a href="dash_mardi"><li class="list-group-item">Mardi Trek</li></a>
	      <a href="dash_langtang"><li class="list-group-item">Langtang Trek</li></a>
	      <a href="index" target="_blank"><li class="list-group-item">Homepage</li></a>
	    </ul>
	  </div> 

          <div id="showcase"> 
	    <?=$output?>

          </div>
        </div>
      </div>
    </main>


  </body>
</html>