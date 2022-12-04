<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 비회원예약조회</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="depth1">
                <div class="depth1_left">
                    <h1 class="logo"><a href="../index.php">노랑풍선</a></h1>
                </div>
                <div class="depth1_right">
                    <h2 class="screen_out">사용자메뉴</h2>
                    <ul class="depth1_top_menu">
                    <?php if(!$s_idx){ ?>
                        <!-- 로그인 전 -->
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="../members/join_pre.php">회원가입</a></li>
                        <li><a href="nonmember_reserve_pkg.php">예약확인</a></li>
                    <?php } else if($s_id == "admin@abc.com"){ ?>
                        <!-- 관리자 로그인 -->
                        <li><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="../admin/index.php">관리자 페이지</a></li>
                    <?php } else{ ?>
                        <!-- 로그인 후 -->   
                        <li><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="../members/my_page.php">마이페이지</a></li>
                    <?php }; ?>    
                        <li><a href="#">단체문의</a></li>
                        <li><a href="#">고객센터</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main class="form_main">
        <h2 class="form_title">비회원 예약조회</h2>
        <div class="form_tab">
            <h3 class="form_tab_title"><a href="nonmember_reserve_pkg.php">패키지여행</a></h3>
            <h3 class="form_tab_title active"><a href="#">자유여행</a></h3>
        </div>
        <form class="form" name="_form" action="nonmember_reserve_free_result.php" method="post" onsubmit="return reserve_form_check();">
            <fieldset>
                <legend class="hide">비회원 자유여행 예약조회</legend>
                <div class="form_section">
                    <div class="input_wrap">
                        <input class="input" type="text" id="u_name" name="u_name" placeholder="이름(실명)">
                        <span id="err_u_name" class="err_txt"></span>
                        <br />

                        <input class="input" type="text" id="orders_idx" name="orders_idx" placeholder="패키지여행 예약번호">
                        <span id="err_orders_idx" class="err_txt"></span>
                        <br />

                        <input class="input" type="text" id="mobile" name="mobile" placeholder="휴대폰 번호(숫자만 입력)">
                        <span id="err_mobile" class="err_txt"></span>
                    </div>
                    <button class="input_button" type="submit">예약조회</button>
                </div>
            </fieldset>
        </form>
        <hr>
        <button type="button" class="join_button" onclick="location.href='../members/join_pre.php'">회원가입</button>
    </main>
    <footer>
        <div class="footer_text">
            <p>이미 비회원으로 예약하셨다고요? 회원가입 후, 예약번호로 내 예약내역을</p>
            <p>매칭하실 수 있습니다. 포인트 적립혜택을 이용하세요!</p>
            <p>예약번호는 예약 시 발송 된 SMS(알림톡) 에서 확인하실 수 있습니다.</p>
        </div>
        <p class="copyright">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>
    <script type= text/javascript>
        function reserve_form_check() {
            var u_name = document.getElementById("u_name");
            var orders_idx = document.getElementById("orders_idx");
            var mobile = document.getElementById("mobile");

            if (u_name.value == "") {
                var txt = document.getElementById("err_u_name");
                txt.innerHTML = "<em>이름을 입력하세요.</em>";
                u_name.focus();
                return false;
            } else {
                var txt = document.getElementById("err_u_name");
                txt.innerHTML = "";
            }

            if (orders_idx.value == "") {
                var txt = document.getElementById("err_orders_idx");
                txt.innerHTML = "<em>예약번호를 입력하세요.</em>";
                orders_idx.focus();
                return false;
            } else {
                var txt = document.getElementById("err_orders_idx");
                txt.innerHTML = "";
            }

            if (mobile.value == "") {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "<em>예약번호를 입력하세요.</em>";
                mobile.focus();
                return false;
            } else {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "";
            }
        };
    </script>
</body>

</html>