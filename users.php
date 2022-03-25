<?php 
  require_once "./components/functions.php";
  require_once "./components/head.php" 

?>

<?php require_once "./components/navbar.php" ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "./components/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<?php echo page_nav("NEW USER") ?>
<!-- Tabs -->
<?php 

    if(isset($_GET['ref']) && $_GET['ref'] == "new")
    {
        require_once "./components/new_user.php" ;
    }else{
        echo "TODO";
    }

?>
</div>

<?php require_once "./components/footer.php" ?>

