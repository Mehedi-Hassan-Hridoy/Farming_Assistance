<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    </button>
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['category']."|| ".$_SESSION['name']."||"; ?></p>
      <a class="nav-link" href="view/home.php"><i class="fas fa-home"></i>Home</a>
      <a class="nav-link" href="view/showprofile.php"><i class="fas fa-prescription-bottle-alt"></i>My Profile</a>  
      <a class="nav-link" href="view/viewProfile3.php"><i class="fas fa-id-badge"></i>View Profile</a> 
      <a class="nav-link" href="Controller/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    </div>
  </nav>
</header>
<br>
</body>
</html>