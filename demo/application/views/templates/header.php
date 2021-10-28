<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" integrity="sha512-TQQ3J4WkE/rwojNFo6OJdyu6G8Xe9z8rMrlF9y7xpFbQfW5g8aSWcygCQ4vqRiJqFsDsE1T6MoAOMJkFXlrI9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css" integrity="sha512-9h7XRlUeUwcHUf9bNiWSTO9ovOWFELxTlViP801e5BbwNJ5ir9ua6L20tEroWZdm+HFBAWBLx2qH4l4QHHlRyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css" integrity="sha512-9h7XRlUeUwcHUf9bNiWSTO9ovOWFELxTlViP801e5BbwNJ5ir9ua6L20tEroWZdm+HFBAWBLx2qH4l4QHHlRyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://apalfrey.github.io/select2-bootstrap-5-theme/select2-bootstrap-5-theme.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://apalfrey.github.io/select2-bootstrap-5-theme/script.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

        * {
            font-family: 'Mitr', sans-serif;
        }
    </style>


</head>

<body id="body-pd">
    <?php
    if (isset($navbar)) {

    ?>

        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <!-- //search header -->
           
                <form action="<?php echo $base_url ?>Note/show_search_table_bar" method="post"  class="col-12 d-flex justify-content-center">
                    <div class="input-group" style="max-width: 35rem;">
                        <input name="tag" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">ค้นหา</button>
                </form>
           

        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <!-- <i class='bx bx-layer nav_logo-icon'></i> -->
                        <img src="http://localhost/images/1.jpg" class="rounded-circle" style="max-height: 3rem; ">
                        <span class="nav_logo-name">NOTE</span>
                    </a>
                    <div class="nav_list">
                        <!-- <a href="#" class="nav_link active">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span> 
                        </a>  -->
                        <a href="<?php echo $base_url ?>index.php/Profile/show" class="nav_link">
                            <i class='bx bx-user nav_icon' style="font-size: 1.5rem; "></i>
                            <span class="nav_name">โปร์ไฟล์</span>
                        </a>
                        <a href="<?php echo $base_url ?>index.php/Note/show" class="nav_link">
                            <i class='bi bi-pencil-square' style="font-size: 1.5rem;"></i>
                            </i> <span class="nav_name">เพิ่มรายการโน้ต</span>
                        </a>
                        <a href="<?php echo $base_url ?>index.php/Note/show_search" class="nav_link">
                            <i class='bx bx-search' style="font-size: 1.5rem; "></i>
                            <span class="nav_name">ค้นหารายการโน้ต</span>
                             <!-- </a> <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">Files</span> -->
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Stats</span>
                        </a>
                    </div>
                </div>

                <a href="<?php echo $base_url ?>index.php/Authen/logout" class="nav_link">
                    <i class='bx bx-log-out nav_icon' style="font-size: 1.5rem; "></i> <span class="nav_name">ออกจากระบบ</span> </a>


            </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100 ">

            <style>
                :root {
                    --header-height: 3rem;
                    --nav-width: 68px;
                    --first-color: #FCDEE2;
                    --first-color-light: #000;
                    --white-color: #000;
                    --body-font: 'Nunito', sans-serif;
                    --normal-font-size: 1rem;
                    --z-fixed: 100
                }

                *,
                ::before,
                ::after {
                    box-sizing: border-box
                }

                body {
                    position: relative;
                    margin: var(--header-height) 0 0 0;
                    padding: 0 1rem;
                    font-family: var(--body-font);
                    font-size: var(--normal-font-size);
                    transition: .5s
                }

                a {
                    text-decoration: none
                }

                .header {
                    width: 100%;
                    height: var(--header-height);
                    position: fixed;
                    top: 0;
                    left: 0;
                    display: flex;
                    align-items: center;
                    /* justify-content: space-between; */
                    padding: 0 1rem;
                    background-color: var(--white-color);
                    z-index: var(--z-fixed);
                    transition: .5s
                }

                .header_toggle {
                    color: var(--first-color);
                    font-size: 1.5rem;
                    cursor: pointer
                }

                /* .header_img {
                width: 35px;
                height: 35px;
                display: flex;
                justify-content: center;
                border-radius: 50%;
                overflow: hidden
            } */

                /* .header_img img {
                width: 40px
            } */

                .l-navbar {
                    position: fixed;
                    top: 0;
                    left: -30%;
                    width: var(--nav-width);
                    height: 100vh;
                    background-color: var(--first-color);
                    padding: .5rem 1rem 0 0;
                    transition: .5s;
                    z-index: var(--z-fixed)
                }

                .nav {
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    overflow: hidden
                }

                .nav_logo,
                .nav_link {
                    display: grid;
                    grid-template-columns: max-content max-content;
                    align-items: center;
                    column-gap: 1rem;
                    padding: .5rem 0 .5rem 1.5rem
                }

                .nav_logo {
                    margin-bottom: 2rem;
                    margin-left: -1rem
                }

                .nav_logo-icon {
                    font-size: 1.25rem;
                    color: var(--white-color)
                }

                .nav_logo-name {
                    color: var(--white-color);
                    font-weight: 700
                }

                .nav_link {
                    position: relative;
                    color: var(--first-color-light);
                    margin-bottom: 1.5rem;
                    transition: .3s
                }

                .nav_link:hover {
                    color: var(--white-color)
                }

                .nav_icon {
                    font-size: 1.25rem
                }

                .show {
                    left: 0
                }

                .body-pd {
                    padding-left: calc(var(--nav-width) + 1rem)
                }

                .active {
                    color: var(--white-color)
                }

                .active::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    width: 2px;
                    height: 32px;
                    background-color: var(--white-color)
                }

                .height-100 {
                    height: 100vh
                }

                @media screen and (min-width: 768px) {
                    body {
                        margin: calc(var(--header-height) + 1rem) 0 0 0;
                        padding-left: calc(var(--nav-width) + 2rem)
                    }

                    .header {
                        height: calc(var(--header-height) + 1rem);
                        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
                    }

                    /* .header_img {
                    width: 40px;
                    height: 40px
                }

                .header_img img {
                    width: 45px
                } */

                    .l-navbar {
                        left: 0;
                        padding: 1rem 1rem 0 0
                    }

                    .show {
                        width: calc(var(--nav-width) + 156px)
                    }

                    .body-pd {
                        padding-left: calc(var(--nav-width) + 188px)
                    }
                }
            </style>
        <?php
    }
        ?>
        <div class="container-fluid">