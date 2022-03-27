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
<?php ?>
<!-- Tabs -->
<?php 

    if(isset($_GET['ref']) && $_GET['ref'] == "new")
    {
        echo page_nav("NEW SITE");
        require_once "./components/new_site.php" ;
      }else{
        echo page_nav("ALL SITES  ");
       require_once "./components/sites.php" ;
    }

?>
</div>

<?php require_once "./components/footer.php" ?>


