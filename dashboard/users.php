<?php 
  require_once "./components/functions.php";
  require_once "./components/head.php" ;
  session_start();

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
        echo page_nav("NEW USER");
        require_once "./components/new_user.php" ;
      }else{
        echo page_nav("ALL USERS  ");
       require_once "./components/users.php" ;
    }

?>
</div>

<?php require_once "./components/footer.php" ?>


