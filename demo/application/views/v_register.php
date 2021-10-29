<!-- <style>
    body {
            background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
</style> -->
<nav class="navbar bg-transparent">
    <a class="navbar-brand" href="">
        <img src="http://localhost/images/1.jpg" class="rounded-circle" style="max-height: 3rem;">
    </a>
</nav>
<div class="row " style="margin-top: 10rem;">
    <div class="col"></div>
    <div class="col">

        <h1 style="margin-bottom: -10rem;"></h1>
        <h1 class="text-center"> Register</h1>
        <form action="<?php echo $base_url ?>index.php/Register/save" method="post">
            <div class="mb-3">
                <label class="form-label">อีเมล</label>
                <input name="email" type="email" class="form-control border-top-0 border-start-0 border-end-0" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input name="username" type="username" class="form-control border-top-0 border-start-0 border-end-0" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่าน</label>
                <input placeholder="*รหัสผ่านต้องมี 8 ตัวขึ้นไป" id="pass" name="password" type="password" class="form-control border-top-0 border-start-0 border-end-0" required>
                <div style="font-size: 0.65rem" > 

                    <h> *รหัสผ่านต้องมี
                        ตัวอักษร (a-z, A-Z) ,ตัวเลข (0-9) อย่างน้อย 1 ตัวอักษร
                        เครื่องหมายหรืออักขระพิเศษ @_!*-+?,.<>;#:=&% อย่างน้อย 1 ตัวอักษร
                        </h>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">ยืนยันรหัสผ่าน</label>
                <input id="re-pass" name="re_password" type="password" class="form-control border-top-0 border-start-0 border-end-0" required>
            </div>
            <div class="d-grid gap-2 mt-5">
                <button disabled id="sing" type="submit" class="btn btn-danger">ลงทะเบียน</button>
            </div>

        </form>
    </div>
    <div class="col"></div>
</div>

<script>
    function isUpper(str) {
        return !/[a-z]/.test(str) && /[A-Z]/.test(str);
    }
    //

    function isAon(str) {
        return /[@_!*-+?,.<>;#:=&%]/.test(str);
    }
    const checkPassword = (password = '') => {
        // -ความยาวตั้งแต่8ขึ้นไป /
        // -ต้องมีอักขระพิเศษ อย่างน้อย 1ตัว /*/*/
        // -ต้องมีอักษรพิมพ์ใหญ่กับ พิมพ์เล็กอย่างน้อย1 ตัว /
        // -มีตัวเลข0-9อย่างน้อย 1ตัว /
        let i = 0;
        let character = '';
        let countNumber = 0;
        let countUpperCase = 0;
        let countLowerCase = 0;
        let bool = true;
        let countAon = 0;
        while (i < password.length) {
            character = password.charAt(i);
            if (!isNaN(character * 1)) {
                countNumber = countNumber + 1
            }
            if (isUpper(character)) {
                countUpperCase = countUpperCase + 1
            }
            if (!isUpper(character)) {
                countLowerCase = countLowerCase + 1
            }
            if (isAon(character)) {
                countAon = countAon + 1
            }
            i++;
        }
        if (password.length < 8) {
            bool = false;
        }
        if (countNumber < 1) {
            bool = false;
        }
        if (countUpperCase < 1) {
            bool = false;
        }
        if (countLowerCase < 1) {
            bool = false;
        }
        if (countAon < 1) {
            bool = false;
        }
        return bool
    }


    $(document).ready(function() {
        $('#pass,#re-pass').on('input', function() { //jqury(event roop)
            if ($('#pass').val() == $('#re-pass').val()) {
                if (checkPassword($('#pass').val())) {
                    $('#sing').removeAttr('disabled');
                } else {
                    $('#sing').attr('disabled', 'true');
                }
            } else {
                $('#sing').attr('disabled', 'true');
            }
        });
    });
</script>