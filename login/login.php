<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 - 로그인</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
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
                        <li><a href="#">로그인</a></li>
                        <li><a href="../members/join_pre.php">회원가입</a></li>
                        <li><a href="#">고객센터</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="login_container">
            <h2 id="login">로그인</h2>
            <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
                <fieldset>
                    <legend class="hide">로그인</legend>
                    <div class="form_section">
                        <div>
                            <input class="form_input" type="text" name="u_id" id="u_id" placeholder="이메일 주소 혹은 ID">
                            <input class="form_input" type="password" name="pwd" id="pwd" placeholder="비밀번호">
                        </div>
                        <div>
                            <button type="submit" name="login_button" id="login_button">로그인</button>
                        </div>
                    </div>
                    <span id="err_msg" class="err_txt"></span><br>
                </fieldset>
            </form>
            <div>
                <ul class="sub_menu">
                    <li><a href="../members/find_id.php">아이디/비밀번호 찾기</a></li>
                    <li><a href="../nonmember_reserve_pkg.php">비회원 예약조회</a></li>
                    <li><a href="../members/join_pre.php">간편 회원가입</a></li>
                </ul>
            </div>
            <div class="simple_login_title">
                <div class="simple_login_line"></div>
                <div class="simple_login_text">
                    <span>간편 로그인</span>
                </div>
            </div>
            <a class="log_button naver_log" href="#"><i class="log_icon naver"></i>네이버 로그인</a>
            <a class="log_button kakao_log" href="#"><i class="log_icon kakao"></i>카카오톡 로그인</a>
            <a class="log_button fb_log" href="#"><i class="log_icon fb"></i>페이스북 로그인</a>
            <a class="log_button apple_log" href="#"><i class="log_icon apple"></i>애플 로그인</a>
        </div>
    </main>
    <footer>
        <div class="footer_info">
            <p>노랑풍선 회원으로 가입을 하시면 포인트적립,</p>
            <p>회원전용혜택 등 더 많은 서비스를 이용하실 수 있습니다.</p>
        </div>
        <p class="copy_right">© Yellow Balloon tour. All Rights Reserved.</p>
    </footer>

    <!-- 폼 스크립트 -->
    <script>
        function login_form_check() {
            var u_id = document.getElementById("uid");
            var u_pwd = document.getElementById("pwd");

            if (u_id.value == "") {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "<em>아이디를 입력하세요.</em>"
                u_id.focus();
                return false;
            } else {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "";
            }

            if (u_pwd.value == "") {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "<em>비밀번호를 입력하세요.</em>"
                u_pwd.focus();
                return false;
            } else {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "";
            }
        }
    </script>
</body>

</html>