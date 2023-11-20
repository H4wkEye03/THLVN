<div class="header">
    <div id="header-top">
        <div id="logo-header">
            <a href="index.php"><img src="./resources/favicon.png" alt="Logo"></a>
        </div>

        <!--Tiêu đề trang-->
        <div id="banner">
            <div id="para">Ôn tập và thi thử trắc nghiệm Vật Lí online</div>
        </div>

        <!--Các thao tác liên quan đến người dùng-->
        <ul id="nav-infor">
            <li>
                <a id="link-to-reg" href="./register.php"><button id="btn-show-username-or-register"
                        style="background-color: rgba(0,0,0,0); border: 0px;"><label
                            style="align: center; cursor: pointer;"><?php echo "Đăng ký"; ?></label></button></a>
                <ul class="subnav-infor">
                    <?php
                        if (isset($_SESSION['username'])){ ?>

                    <!--  script thay đổi chức năng các button -->
                    <script>
                    document.getElementById("link-to-reg").removeAttribute("href");
                    document.getElementById("btn-show-username-or-register").innerHTML =
                        "<?php echo $_SESSION['username'];?>";
                    </script>
                    <li><a href="./user_infos.php">Thông tin cá nhân</a></li>
                    <li><a href="./change_password.php">Đổi mật khẩu</a></li>
                    <li><a href="./mock_exam_history.php">Lịch sủ thi thử</a></li>
                    <?php   } ?>
                </ul>
            </li>
        </ul>
        <?php
            if (isset($_SESSION['username'])){ ?>
        <a href="./log_out.php"><button id="button-dangxuat" name="xuli">Đăng xuất</button></a>
        <?php   }
            else{ ?>
        <a href="./login.php"><button id="button-dangxuat" name="xuli">Đăng nhập</button></a>
        <?php   } ?>
    </div>

    <!--Thanh điều hướng trang-->
    <div id="header-bottom">
        <ul id="nav-header">
            <li><a href="./index.php">Trang chủ</a></li>
            <li><a href="./mock_exam_ready.php">Ôn thi tốt nghiệp</a></li>
            <li><a href="./contact.php">Liên hệ</a></li>
            <li><a href="./papers.php">Tài liệu</a></li>
        </ul>
    </div>
</div>