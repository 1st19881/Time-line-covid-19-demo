<?php 
$menu = "member";
include("head.php"); 
include("sidebar.php");
include("navbar.php"); 
?>

                <?php 
                  error_reporting( error_reporting() & ~E_NOTICE );
                   $act = $_GET['act'];
                      if($act == 'add'){
                      include('member_add.php');
                      }elseif ($act == 'edit') {
                      include('member_edit.php');
                      }else {
                      include('member_list.php');
                      }
                ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    
  });
</script>


<?php include('footer.php'); ?>