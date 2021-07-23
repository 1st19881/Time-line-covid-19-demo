<br>
<br>
<br>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title">+เพิ่มข้อมูลสมาชิก</h4>
        </div>
        <div class="card-body">
            <form action="member_add_db.php"  method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <br>
                        <div class="form-group">
                            <label class="bmd-label-floating">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control" name="m_name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <br>
                        <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" name="m_user" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <div class="form-group">
                            <label class="bmd-label-floating">password</label>
                            <input type="password" class="form-control" name="m_pass" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <div class="form-group">
                            <label class="bmd-label-floating">ที่อยู่</label>
                            <input type="text" class="form-control" name="m_address" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">เพิ่มไฟล์ภาพ</label>
                            <input type="file" class="form-control-file border border-dark" id="exampleFormControlFile1" name="m_img">
                        </div>
                        <br>
                    </div>
                </div>
                <button type="submit" class="btn btn-info pull">บันทึก</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>


