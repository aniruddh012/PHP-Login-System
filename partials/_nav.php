<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        $loggedin = false;
    }
    else{
        $loggedin = true;
    }
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">royalChat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
      
      if($loggedin==true){
        echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/phpspace/loginsystem/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phpspace/loginsystem/logout.php">Logout</a>
        </li>';
      }
      else{
        echo '<li class="nav-item">
          <a class="nav-link" href="http://localhost/phpspace/loginsystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phpspace/loginsystem/signup.php">Signup</a>
        </li>';
      }
      echo '</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';
?>