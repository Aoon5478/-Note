<!-- <style>
    body {
            background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
</style> -->

<div class="row">
    <div class="col">
    </div>
    <div class="col text-center">
        <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
    </div>
    <div class="col"></div>
</div>
<div class="row ">
    <div class="col"></div>
    <div class="col">
        <form action="<?php echo $base_url ?>index.php/Profile/edit" method="post">
            <div class="mb-3">
                <label class="form-label">อีเมล์</label>
                <input name="email" type="email" class="form-control" value="<?php echo $user->email ?>">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input  name="username" type="text" class="form-control" value="<?php echo $user->username ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่านใหม่</label>
                <input id="pass" placeholder="ไม่เปลี่ยนไม่ต้องกรอก" name="password" type="password" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">ยืนยันรหัสผ่านใหม่</label>
                <input id="re-pass"  placeholder="ไม่เปลี่ยนไม่ต้องกรอก" name="re_password" type="password" class="form-control" value="">
            </div>
            <div class="col text-center">
                <button type="submit" id="sing" class="btn"  style="background-color: #FFB4B4;">บันทึก</button>
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