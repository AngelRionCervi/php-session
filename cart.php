<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION)) { session_start(); }

if (!isset($_SESSION['login'])) {
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$_SESSION['cart'][] = $_POST['cookieID'].'-'.uniqid();
}

?>
<section class="cookies container-fluid">
    <div class="row">
      TODO : Display shopping cart items from $_SESSION here.
    <?php
      	if (isset($_SESSION['login'])){
  			foreach ($_SESSION['cart'] as $key => $item){ 
  	?>
  			<p>cookie id = <?php echo array_shift(explode("-", $item)); ?></p>

	<?php 
			}
		} 
	?>
	 
    </div>
</section>
<?php require 'inc/foot.php'; ?>
