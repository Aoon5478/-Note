<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="http://localhost/dev/demo/index.php/form/edit" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <!-- คำนำหน้า -->
        <input type="text" name="prefixname">
        <!-- ชื่อ  -->
        <input type="text" name="firstname">
        <!-- นามสกุล -->
        <input type="text" name="lastname">
        <!-- วันเดือนปีเกืด -->
        <input type="date" name="bothdata">

        <input type="submit" value="send">
    </form>
</body>

</html>