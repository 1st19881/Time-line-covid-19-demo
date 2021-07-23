<?php include('../config/conn.php');
$sql="SELECT * FROM member ";
$result = mysqli_query($con, $sql);
$i=1;
?>



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">จัดการสมาชิก</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                  <a class="btn btn-info btn-sm p-2 mb-2" href="member.php?act=add">เพิ่มข้อมูล+</a>
                        <table id="dtBasicExample" class="table table-striped " cellspacing="0" width="100%">
                            <thead>
                                <tr role="row" class="info">
                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#ลำดับ</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อสมาชิก</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อผู้ใช้</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสผ่าน</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)) {  ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['m_name'];?></td>
                                    <td><?php echo $row['m_user'];?></td>
                                    <td><?php echo $row['m_pass'];?></td>
                                    <td><img src="m_img/<?php echo $row['m_img'];?>" width="50" class="img-circle elevation-2"alt="User Image"></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="del-btn btn btn-danger btn-sm" href="table.php">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete Sweetalert2
                                        </a>
                                    </td>
                                </tr>
                                <?php  }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>









</div>











<?php 
include("footer.php"); 

?>

<script>
  $(function () {
    $(".datatable").DataTable();
    
  });
</script>


<?php include('footer.php'); ?>