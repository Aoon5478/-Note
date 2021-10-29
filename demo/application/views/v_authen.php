<nav class="navbar bg-transparent">
    <a class="navbar-brand" href="">
        <img src="http://localhost/images/2.png" class="rounded-circle" style="max-height: 5rem;">
    </a>
</nav>
<div class="row " style="margin-top: 6rem;">
    <div class="col"></div>
    <div class="col">
        <h1 class="text-center" style="margin-bottom: 2rem;">Login</h1>
        <form action="<?php echo $base_url ?>index.php/Authen/login" method="post">
            <div class="mb-3">
                <input name="username" placeholder="ชื่อผู้ใช้" type="text" class="form-control border-top-0 border-start-0 border-end-0" required>
            </div>
            <div class="mb-3">
                <input name="password" placeholder="รหัสผ่าน" type="password" class="form-control border-top-0 border-start-0 border-end-0" required>
            </div>
            <div class="d-grid gap-2 mt-5">
                <button type="submit" class="btn btn-danger">เข้าสู่ระบบ</button>
                <div class="row">
                    <div class="col text-start">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" id="resetPassword" class="form-text"> <u> ลืมรหัสผ่าน ? </u></a>
                    </div>
                    <div class="col text-end">
                        <a data-bs-target="#exampleModal" href="<?php echo $base_url ?>index.php/register/show" class="form-text">
                            <h>ลงทะเบียน </h>
                        </a>
                    </div>
                </div>
                <!-- <button type="submit" class="btn btn-danger">เข้าสู่ระบบ</button> -->
            </div>
        </form>

    </div>

    <div class="col"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">รีเซ็ตรหัสผ่าน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="exampleInputEmail1" class="form-label">กรอกชื่อผู้ใช้</label>
                <input id="re-username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">โปรดตรวจสอบลิงค์รีเซ็ตใน Email</div>
            </div>
            <div class="modal-footer">
                <button id="re-mail" type="button" data-bs-dismiss="modal" class="btn btn-primary">ส่งลิงค์รีเซ็ตไปที่ Email</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#re-mail').click(function() {
            var settings = {
                "url": `http://localhost:3000/mail/reset-password?username=${$('#re-username').val()}`,
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(settings).done(function(response) {
                console.log(response);
            });
        });
    });
</script>