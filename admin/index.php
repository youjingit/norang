<?php
include "../inc/session.php";

if($s_id != "admin@abc.com"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"login/login.php\";
        </script>
    ";
    exit;
};

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지</title>    
    <link rel="stylesheet" type="text/css" href="../css/admin/common.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/index.css">
</head>
<body>
    <h1>관리자 페이지 입니다.</h1>
    <?php include "./inc/sub_header.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(function () {
            $(".toggle_btn").click(function () {
                $(".sub_menu_wrap").fadeToggle(300);
            });

            $('.sub_menu_wrap').mouseleave(function () {
                $('.sub_menu_wrap').fadeOut();
                $('.hide_sidemenu').fadeIn();
            });
        });
    </script>
</body>
</html>

