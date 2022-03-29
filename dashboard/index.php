<?php 

  require_once "./components/head.php" ;
  session_start();
  if(!isset($_SESSION['logedIn'])){
      redirect("../auth.php");
  }
?>

<?php require_once "./components/navbar.php" ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "./components/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<?php echo page_nav("DASHBOARD") ?>
<!-- Tabs -->
<?php require_once "./components/tabs.php" ?>
</div>

<?php require_once "./components/footer.php" ?>

