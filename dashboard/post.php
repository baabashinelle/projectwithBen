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
<?php //activate_post(); ?>
<!-- Tabs -->
<?php 

    if(isset($_GET['ref']) && $_GET['ref'] == "new")
    {
        echo page_nav("NEW POST");
        require_once "./components/new_post.php" ;
      }else{
        echo page_nav("ALL POSTS  ");
       require_once "./components/posts.php" ;
    }

?>
</div>

<?php require_once "./components/footer.php" ?>


