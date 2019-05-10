<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION)) { session_start(); }

if (!isset($_SESSION['login'])) {
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$_SESSION['cart'][] = $_POST['cookieID'].'-'.uniqid();
}

if (isset($_SESSION['login'])){
  var_dump($_SESSION);
}


?>
<section class="cookies container-fluid">
    <div class="row">
      TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
