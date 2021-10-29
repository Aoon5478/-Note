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
        <i class="bi bi-person-circle" style="font-size: 5rem; "></i>
    </div>
    <div class="col"></div>
</div>
<div class="row ">
    <div class="col"></div>
    <div class="col">
        <form action="<?php echo $base_url ?>index.php/profile/show_edit" method="post">
            <div class="mb-3">
                <label class="form-label">อีเมล์</label>
                <input disabled type="email" class="form-control" value="<?php echo $user->email  ?> ">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input disabled type="username" class="form-control" value="<?php echo $user->username  ?>">
            </div>
            <div class="col text-center">
                <button type="submit" class="btn" style="background-color: #FFB4B4;">แก้ไข</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>