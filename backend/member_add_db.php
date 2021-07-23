<?php 
include('../config/conn.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;


$m_name = mysqli_real_escape_string($con,$_POST['m_name']);
$m_user = mysqli_real_escape_string($con,$_POST['m_user']);
$m_pass = mysqli_real_escape_string($con,$_POST['m_pass']);
$m_address = mysqli_real_escape_string($con,$_POST['m_address']);

$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 

		$path="m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}


$sql="INSERT INTO member (m_name,m_user,m_pass,m_address,m_img) VALUE ('$m_name','$m_user','$m_pass','$m_address','$newname')";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");
mysqli_close($con);

echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
if($result){
    echo '
    <script>
       setTimeout(function() {
        swal({
            title: "เพิ่มสำเร็จ",
            text: "เพิ่มข้อมูลสมาชิกสำเร็จ",
            type: "success"
        }, function() {
            window.location = "member.php";
        });
    }, 100);
</script>
';
}
else{
echo '
<script>
   setTimeout(function() {
    swal({
        title: "ไม่สำเร็จ",
        text: "เพิ่มข้อมูลสมาชิกไม่สำเร็จ!!",
        type: "warning"
    }, function() {
        window.location = "member.php?act=add";
    });
}, 100);
</script>
';
}
?>