<?php
include('config/constants.php');

function custom_echo($x, $length)
{
  if (strlen($x) <= $length) {
    echo $x;
  } else {
    $y = substr($x, 0, $length) . '...';
    echo $y;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Website</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="public/css/global.css">

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="0">
  <!-- Navbar -->
  <section class="header__navbar fixed-top p-0">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="">
        <a class="navbar-brand" href="<?php echo SITEURL; ?>">
          <img src="public/images/logo.jpg" alt="Restaurant Logo" class="img-responsive img__logo">
        </a>
      </div>

      <!-- pc and tablet -->
      <div class="menu d-none d-md-flex">
        <div>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/index.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>">Home</a>
        </div>
        <div>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/categories.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>categories.php">Categories</a>
        </div>
        <div>
          <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/foods.php" || $_SERVER['SCRIPT_NAME'] == "/assignmentWEB/category-foods.php" || $_SERVER['SCRIPT_NAME'] == "/assignmentWEB/food-search.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>foods.php">Foods</a>
        </div>

        <?php
        if (isset($_SESSION['manager'])) {
        ?>
          <div>
            <a href="<?php echo SITEURL; ?>manager_page/" class="navbar__item">Manager</a>
          </div>
        <?php
        }
        ?>

        <div>
          <?php
          if (!isset($_SESSION['user'])) {
          ?>
            <a href="<?php echo SITEURL; ?>user_page/login.php" class="navbar__item">Login</a>
          <?php
          } else {
            // Get ID user
            // $username = $_SESSION['user'];
            // $sql = "SELECT * FROM users WHERE username = '$username'";
            // $res = mysqli_query($connection, $sql);
            // $count = mysqli_num_rows($res);
            // if ($count == 1) {
            //   $row = mysqli_fetch_assoc($res);
            //   $id = $row['id'];
            // }

          ?>
            <a href="<?php echo SITEURL; ?>user_page/user.php?id=<?php echo $id; ?>" class="navbar__item">Personal</a>
        </div>
        <div><a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/cart.php") { ?> class="navbar__item active" <?php   } ?> href="<?php echo SITEURL; ?>cart.php" class="navbar__item"><i class="fas fa-shopping-cart"></i></a></div>
        <div><a href="<?php echo SITEURL; ?>user_page/logout.php" class="navbar__item">Logout</a>
        <?php
          }
        ?>
        </div>
      </div>

      <div class="d-block d-md-none">
        <div class="">
          <a class="navbar__item header__menu text-right" href="#">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- mobile -->
    <div class="mobile__navbar menu d-none flex-column d-md-none">
      <div>
        <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/index.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>">Home</a>
      </div>
      <div class="mt-2">
        <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/categories.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>categories.php">Categories</a>
      </div>
      <div class="mt-2">
        <a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/foods.php" || $_SERVER['SCRIPT_NAME'] == "/assignmentWEB/category-foods.php" || $_SERVER['SCRIPT_NAME'] == "/assignmentWEB/food-search.php") { ?> class="navbar__item active" <?php   } ?> class="navbar__item" href="<?php echo SITEURL; ?>foods.php">Foods</a>
      </div>

      <?php
      if (isset($_SESSION['manager'])) {
      ?>
        <div class="mt-2">
          <a href="<?php echo SITEURL; ?>manager_page/" class="navbar__item">Manager</a>
        </div>
      <?php
      }
      ?>

      <div class="mt-2">
        <?php
        if (!isset($_SESSION['user'])) {
        ?>
          <a href="<?php echo SITEURL; ?>user_page/login.php" class="navbar__item">Login</a>
        <?php
        } else {
          // Get ID user
          // $username = $_SESSION['user'];
          // $sql = "SELECT * FROM users WHERE username = '$username'";
          // $res = mysqli_query($connection, $sql);
          // $count = mysqli_num_rows($res);
          // if ($count == 1) {
          //   $row = mysqli_fetch_assoc($res);
          //   $id = $row['id'];
          // }

        ?>
          <a href="<?php echo SITEURL; ?>user_page/user.php?id=<?php echo $id; ?>" class="navbar__item">Personal</a>
      </div>
      <div class="mt-2"><a <?php if ($_SERVER['SCRIPT_NAME'] == "/assignmentWEB/cart.php") { ?> class="navbar__item active" <?php   } ?> href="<?php echo SITEURL; ?>cart.php" class="navbar__item"><i class="fas fa-shopping-cart"></i></a></div>
      <div class="mt-2"><a href="<?php echo SITEURL; ?>user_page/logout.php" class="navbar__item">Logout</a>
      <?php
        }
      ?>
      </div>
    </div>
  </section>