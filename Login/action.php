<?php
    session_start();
    require_once('../app/database.php');
    if (isset($_POST['button-submit'])) {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        if ($user_name == '' && $password == '') {
           $_SESSION['tb'] = "Bạn chưa điền thông tin để đăng nhập !!!!";
           header('location: index.php');
        }
        else if ($user_name == '') {
           $_SESSION['tb'] =  "Bạn chưa nhập email !!!!";
           header('location: index.php');
        }
        else if ($password == '') {
           $_SESSION['tb'] =  "Bạn chưa nhập mật khẩu !!!!";
           header('location: index.php');
        }
        else {
            $sql = "select * from users where email = '$user_name' and password = '$password' ";
            $query = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows == 0) {
                $_SESSION['tb'] = "Tên đăng nhập hoặc mật khẩu không chính xác !!!";
                header('location: index.php');
            }
            else if ($num_rows == 1) {
                $query = $query->fetch_assoc();
                $_SESSION['username'] = $query['username'];
                $_SESSION['userid'] = $query['userid'];
                echo "Đăng nhập thành công!!! Đang chuyển hướng về trang chủ.....";

                // chuyến hướng về trang chủ
                header('location: ../');
            }
        }
    }
?>