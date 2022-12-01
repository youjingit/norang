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
    <h1>관리자 페이지</h1>
    <div id="sidebar_wrap">
        <div class="sidebar">
            <div class="sidebar_menu">
                <div class="sidebar-inner">
                    <div id="sidebar_btn">
                        <ul>
                            <li class="toggle_btn"><a href="javascript:void(0);" class="toggle_i"><i></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sub_menu_wrap">
                <div class="sub_menu">
                    <h2>관리자님,<br>안녕하세요!</h2>
                    <ul class="menu_list">
                        <li><a href="login/logout.php">로그아웃</a></li>
                        <li><a href="members/member_info.php?g_idx=<?php echo $s_idx?>">내 정보</a></li>
                        <li><a href="../index.php">메인홈페이지</a></li>
                        <li><a href="./">관리자홈으로</a></li>
                    </ul>
                    <hr>
                    <ul class="menu_list">
                        <li><a href="notice/list.php">공지사항</a></li>
                        <li><a href="members/list.php">회원관리</a></li>
                        <li><a href="products/list.php">상품관리</a></li>
                        <li><a href="">예약내역</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(function () {
            $(".sub_menu_wrap").hide();
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
