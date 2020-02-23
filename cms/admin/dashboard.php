<?php session_start();
   if(!isset($_SESSION['user']['id'])){
    header('Location:login.php');
   }
?>
<?php include('../include/header.php');?>



  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include('partial/sidebar.php'); ?>

    <!-- Page Content Holder -->
    <div id="content">
      <!-- top nav bar -->
      <?php include('partial/top-nav.php');?>
      <div class="container">
               Dashboard
      </div>

    </div>
  </div>

<?php include('../include/footer.php');?>



