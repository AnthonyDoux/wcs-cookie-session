<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION['prenom']))
{
  header('location: login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
      unset($_COOKIE["PHPSESSID"]);
      	foreach ($_COOKIE as $cart => $cookie) {
      ?>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-<?= $cookie ?>.jpg" alt="cookies choclate chips" class="img-responsive">
      </figure>
    </div>

      <?php
      	}
      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
