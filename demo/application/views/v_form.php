
    <?php
    // var_dump($forms);
    foreach ($forms as $form) {
        // var_dump($form); เช็คการแสดงข้อมูล
        echo "ชื่อ นามสกุล: " . $form->prefixname . " " . $form->firstname . " " . $form->lastname;
        echo "<hr>";
    }
    ?>
    <table id="table_id" class="display"> 
        <!-- create table -->
        <thead> <!--แบ่งส่วนตาราง -->
            <tr>
                <th>คำนำหน้าชื่อ</th> <!--ส่วนหัวตาราง -->
                <th>ชื่อจริง</th>
                <th>นามสกุล</th>
                <th>ดำเนินการ</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($forms as $form) {
            ?>
                <tr>
                    <td><?php echo $form->prefixname ?></td>
                    <td><?php echo $form->firstname ?></td>
                    <td><?php echo $form->lastname ?></td>
                    <td>
                        <form action="<?php  echo $base_url ?>index.php/form/delete" method="post">
                            <input type="hidden" name="id" value="<?php echo $form->id ?>">
                            <button type="submit">ลบ</button>
                        </form>
                        <form action="<?php  echo $base_url ?>index.php/form/show_Edit" method="post">
                            <input type="hidden" name="id" value="<?php echo $form->id ?>">
                            <button type="submit">แก้ไข</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <form action="<?php  echo $base_url ?>index.php/form/save" method="post">


        <!-- คำนำหน้า -->
        <input type="text" name="prefixname">
        <!-- ชื่อ  -->
        <input type="text" name="firstname">
        <!-- นามสกุล -->
        <input type="text" name="lastname">
        <!-- วันเดือนปีเกิด -->
        <input type="date" name="bothdata">

        <input type="submit" value="send">
    </form>
