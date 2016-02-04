<?php include('header.php'); ?>

<?php if($page == "show") : ?>
  <?php include('detail.php'); ?>
<?php else : ?>
  <?php include('home.php'); ?>
<?php endif; ?>

<?php include('footer.php'); ?>
