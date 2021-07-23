<?php 
$menu = "from";
include("head.php"); 
include("sidebar.php");
include("navbar.php"); 
?>
 <?php 
                  error_reporting( error_reporting() & ~E_NOTICE );
                   $act = $_GET['act'];
                      if($act == 'add'){
                      include('from_add.php');
                      }elseif ($act == 'edit') {
                      include('from_edit.php');
                      }else {
                      include('from_list.php');
                      }
                  ?>